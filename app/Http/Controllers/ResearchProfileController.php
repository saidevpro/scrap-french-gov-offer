<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResearchProfileResource;
use App\Mail\ShareResearchProfilMail;
use App\Models\ResearchProfile;
use App\Models\ResearchProfileData;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ResearchProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = ResearchProfile::where('user_id', Auth::id())->orderBy('id', 'desc');

        if ($count = $request->get('c')) {
            $q->limit($count);
        }

        $collection = $q->get();
        return ResearchProfileResource::collection($collection);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('can-add-research')) {
            return response()->json([
                'message' => "Unauthorized"
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'link' => 'required|string',
            'result_count' => 'required|string',
            'days' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $days = (array) $request->get('days');
        $researchProfile = ResearchProfile::create([
            'name' => $request->title,
            'link' => $request->link,
            'result_count' => $request->result_count,
            'lastview_date' => date('Y-m-d'),
            'user_id' => Auth::id(),
            'remember_days' => $days ? implode(',', $days) : null
        ]);

        if ($params = $request->get('params')) {
            $params = json_decode($params, true);
            foreach($params as $label => $values) {
                if (is_array($values)) {
                    foreach($values as $value) {
                        ResearchProfileData::create([
                            'label' => $label,
                            'value' => $value,
                            'research_profile_id' => $researchProfile->id
                        ]);
                    }
                } else {
                    ResearchProfileData::create([
                        'label' => $label,
                        'value' => $values,
                        'research_profile_id' => $researchProfile->id
                    ]);
                }
            }
        }

        return response()->json([
            'message' => 'Research successfully created',
            'research' => $researchProfile
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\ResearchProfile  $researchProfile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $researchProfile = ResearchProfile::find($id);
        if (!$researchProfile || !Gate::allows('manage-research', $researchProfile)) {
            return response()->json(['message'=>'Not found'], 404);
        }
        return response()->json([
            'research' => new ResearchProfileResource($researchProfile)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\ResearchProfile  $researchProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $researchProfile = ResearchProfile::find($id);

        if (!Gate::allows('manage-research', $researchProfile)) {
            return response()->json([
                'message' => 'A problem occur during operation',
            ], 404);
        }

        if ($request->get('update_lastviewdate') == 1) {
            $researchProfile->update(['lastview_date' => date('Y-m-d')]);
            return response()->json([
                'message' => 'La recherche a été modifiée',
            ]);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'days' => 'required|array',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        $days = (array) $request->get('days');
        $researchProfile->update([
            'name' => $request->get('title'),
            'remember_days' => implode(',', $days),
            'link' => $request->link ? $request->link : $researchProfile->link,
            'result_count' => $request->result_count ? $request->result_count : $researchProfile->result_count,
        ]);

        if ($params = $request->get('params')) {
            ResearchProfileData::where('research_profile_id', $id)->delete();

            $params = json_decode($params, true);
            foreach($params as $label => $values) {
                if (is_array($values)) {
                    foreach($values as $value) {
                        ResearchProfileData::create([
                            'label' => $label,
                            'value' => $value,
                            'research_profile_id' => $researchProfile->id
                        ]);
                    }
                } else {
                    ResearchProfileData::create([
                        'label' => $label,
                        'value' => $values,
                        'research_profile_id' => $researchProfile->id
                    ]);
                }
            }
        }

        return response()->json([
            'message' => 'The research successfully updated',
            'research' => $researchProfile
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\ResearchProfile  $researchProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $research = ResearchProfile::find($id);
        if (!Gate::allows('manage-research', $research)) {
            return response()->json([
                'message' => "Research not found",
            ], 404);
        }

        $research->delete();
        return response()->json([
            'message' => 'Reseach was successfully deleted',
            'research' => $research
        ], 202);
    }
    /**
     * Share profil research with contacts
     *
     * @param  App\Models\ResearchProfile  $researchProfile
     * @return \Illuminate\Http\Response
     */
    public function shareResearch(Request $request)
    {
        $ids = $request->contacts;
        if (!$ids) {
            return response()->json([
                'errors' => [
                    'contacts' =>  "The contact's list is required"
                ]
            ], 403);
        }

        foreach($ids as $id) {
            if (!Gate::allows('manage-contact', User::find($id))) {
                return response()->json([
                    'message' => "Unauthorized",
                ], 401);
            }
        }

        foreach($ids as $id) {
            $contact = User::find($id);
            Mail::to($contact->email)->send(new ShareResearchProfilMail(Auth::user(), $contact));
        }

        return response()->json([
            'message' => "The profil was shared successfully"
        ], 200);
    }
}
