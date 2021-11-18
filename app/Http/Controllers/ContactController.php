<?php

namespace App\Http\Controllers;

use App\Events\ContactInvitation;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Models\User;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContactResource::collection(Auth::user()->contacts);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'civility' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }

        $user = Auth::user();
        $password = \Faker\Factory::create()->password(16);

        $parent_date = $user->toArray();
        unset($parent_date['slug']);

        $contact = User::create(array_merge( $parent_date, [
            'civility' => $request->get('civility'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone' => null,
            'email' => $request->get('email'),
            'password' => Hash::make($password),
            'parent_id' => Auth::id(),
        ]));

        ContactInvitation::dispatch($contact, $password);

        return response()->json([
            'message' => "The contact is created successfully",
            'contact' => new ContactResource($contact)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = User::find($id);
        if (!$contact || !Gate::allows('manage-contact', $contact)) {
            return response()->json([
                "message" => "The contact is not found"
            ]);
        }

        return response()->json([
            'contact' => new ContactResource($contact)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = User::find($id);
        if (!$contact || !Gate::allows('manage-contact', $contact)) {
            return response()->json([
                "message" => "The contact is not found"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'civility' => 'required|string',
            'email' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 403);
        }

        $contact->update($validator->validated());
        return response()->json([
            'message' => "The contact is successfully updated",
            'contact' => new ContactResource($contact)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = User::find($id);
        if (!$contact || !Gate::allows('manage-contact', $contact)) {
            return response()->json([
                "message" => "The contact is not found"
            ]);
        }

        $contact->delete();
        return response()->json([
            'message' => "The contact is successfully deleted",
        ]);
    }
    /**
     * Send invitation to the contact
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function sendInvitation ($id)
    {
        $contact = User::find($id);
        if (!$contact || !Gate::allows('manage-contact', $contact)) {
            return response()->json([
                "message" => "The contact is not found"
            ]);
        }

        $password = \Faker\Factory::create()->password(16);
        $contact->update(['password' => Hash::make($password)]);
        ContactInvitation::dispatch($contact, $password);

        return response()->json([
            'message' => "The invitation is send to the contact",
        ]);
    }

}
