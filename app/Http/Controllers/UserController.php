<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\TenderFullContentResource;
use App\Http\Resources\TenderSimpleResource;
use App\Mail\AdminAccountValidationMail;
use App\Models\Company;
use App\Models\Tender;
use App\Models\ViewReport;
use App\Traits\Payable;
use App\Traits\Stats;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Tests\Feature\TenderResourceTest;

class UserController extends Controller
{
    use Stats, Payable;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = \App\Models\User::find(Auth::id());

        $user->update([
            'civility' => $request->civility,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'fonction' => $request->fonction
        ]);

        return response()->json([
            'message' => "Your profil is updated successfully",
            "user" => $user
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
        //
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function sendValidationDemand()
    {
        $admin_email = config('mail.admin_mail');
        Mail::to($admin_email)->send(new AdminAccountValidationMail(Auth::user()));

        return response()->json([
            'message' => "The notification sended successfully"
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
        $company_id = Auth::user()->company_id;
        $company = Company::find($company_id);
        $user_id = Auth::id();

        $cressource = (new CompanyResource($company))->toArray($request);
        $total_fields = count($cressource);
        $filled_fields = 0;

        foreach($cressource as $f) {
            if ($f) {
                $filled_fields += 1;
            }
        }

        $lastTenderViewedReport = ViewReport::where('type', 'tender_view')
                                        ->where('user_id', Auth::id())
                                        ->orderBy('id', 'desc')
                                        ->first();

        $lastTenderViewed = $lastTenderViewedReport ? new TenderSimpleResource(Tender::find($lastTenderViewedReport->reportable_id)) : null;


        $data = [
            'market_count' => $this->getTendersCount(),
            'buyers_count' => $this->getBuyersCount(),
            'boamp_market_count' => $this->getTendersCountBySource('boamp'),
            'card_view_count' => $this->companyCardViewCount($company_id),
            'user_documents_count' => $this->getUserDocumentCount($user_id),
            'user_favoris_count' => $this->getUserFavorisCount($user_id),
            'user_credentials_count' => $this->getUserCredentialsCount($user_id),
            // 'is_page_publish' => $this->hasUserValidSubscription($user_id) && $company->is_page_published,
            'is_page_publish' => (bool) $company->is_page_published,
            'profil_completion' => ceil(($filled_fields/$total_fields)* 100),
            'last_viewed_tender' => $lastTenderViewed,
        ];

        return response()->json($data);
    }
}
