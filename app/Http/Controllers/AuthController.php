<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest as CreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Events\UserRegistered;
use App\Http\Resources\ConvertNullToStringResource;
use App\Http\Resources\UserResource;
use App\Models\Company;
use App\Models\CompanyContact;
use App\Models\TurnoverSlice;
use App\Rules\PasswordMatch;
use App\Traits\Payable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use Payable;
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = Auth::attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(CreateRequest $request) {
        $city = \App\Models\City::where('name',  mb_strtolower($request->city))->first();
        if ($request->country) {
            $country = \App\Models\Country::where('slug', $request->country)->first();
        } else {
            $country = \App\Models\Country::where('slug', 'france')->first();
        }
        $account_type = \App\Models\AccountTypes::where('name', $request->account_type)->first();

        $company = \App\Models\Company::create([
            'name' => $request->company_name,
            'siret' => $request->siret ? $request->siret : null,
            'category_id' => $request->company_category_id,
            'address_line1' => $request->adresse,
            'address_line2' => $request->adresse_comp,
            'zip_code' => $request->postal,
            'city_id' => $city->id,
            'department_id' => $city->department_id,
            'country_id' => $country->id,
            'website' => $request->company_url ? $request->company_url : null,
            'intervention_zone' => $request->intervention_zone,
            'turnover_slice' => $request->turnover_slice,
            'description' => $request->job,
            'services' => $request->proposition,
            'account_types_id' => $account_type->id,
        ]);

        CompanyContact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'role' => $request->function,
            'company_id' => $company->id
        ]);

        $user = \App\Models\User::create([
            'account_types_id' => $account_type->id,
            'civility' => $request->civility,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'code_phone' => $request->code_phone,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fonction' => $request->function,
        ]);

        $company->user()->save($user);

        $options = trim($request->subscription_request, ',');
        $options = explode(',', $options);
        foreach($options as $opt_slug) {
            $option = \App\Models\AccountOption::where('slug', $opt_slug)->first();
            if ($option) {
                $user->options()->attach($option->id);
            }
        }

        UserRegistered::dispatch($user);
        $this->registerCompanyCard($request, $company);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        Auth::logout();
        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(Auth::refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me() {
        return response()->json([
            'user' => new ConvertNullToStringResource(auth()->user())
        ]);
    }

    /**
     * Update the user password.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => ['required', new PasswordMatch()],
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        User::find(Auth::id())->update([
            'password' => bcrypt($request->get('password'))
        ]);

        return response()->json([
            'message' => "Your password is updated successfully"
        ]);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        $date = now();
        $user = User::where('id', auth()->user()->id)->update(array('last_connection' => $date));
        $user = User::find(auth()->user()->id);
        $user->access_token = $token;
        $user->company_type = ($user->company && $user->company->category )? $user->company->category->name : null;
        $user->subscription = $this->getUserLastPayment(Auth::id());

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60,
            'user' => new UserResource($user)
        ]);
    }
    /**
     * Register Company Card
     * @param Illuminate\Http\Request $request
     * @return \App\Models\CompanyCard
     */
    public function registerCompanyCard(Request $request, Company $company) {
        $company_category = \App\Models\CompanyCategory::where('slug', $request->company_category_id)->first();
        $turnover = TurnoverSlice::find($request->turnover_slice);
        return \App\Models\CompanyCard::create([
            'name' => $request->company_name,
            'siret' => $request->siret ? $request->siret : null,
            'category' => $company_category ? $company_category->name : null,
            'address_line1' => $request->adresse,
            'address_line2' => $request->adresse_comp,
            'zip_code' => $request->postal,
            'city' => $request->city,
            'website' => $request->company_url ? $request->company_url : null,
            'intervention_zone' => $request->intervention_zone,
            'turnover' => $turnover ? $turnover->name : null,
            'job' => $request->job,
            'proposition' => $request->proposition,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'function' => $request->function,
            'company_id' => $company->id,
        ]);
    }
}
