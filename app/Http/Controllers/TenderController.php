<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTenderRequest as StoreRequest;
use App\Http\Resources\DocumentResource;
use App\Http\Resources\TenderFullContentResource;
use App\Http\Resources\TenderSimpleResource;
use App\Models\Document;
use App\Models\Favoris;
use Illuminate\Http\Response;
use App\Models\Tender;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();
        return TenderSimpleResource::collection($tenders);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $tender = Tender::create([
            'ref' => $request->ref,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'city_id' => $request->city_id,
            'department_id' => $request->department_id,
            'country_id' => $request->country_id,
            'activity_id' => $request->activity_id,
            'procedure_type_id' => $request->procedure_type_id,
            'budget_type_id' => $request->budget_type_id,
            'state_id' => $request->state_id,
            'release_date' => $request->release_date,
            'closing_date' => $request->closing_date,
            'zip_code' => $request->zip_code,
            'link' => $request->link,
            'code' => $request->code,
            'label' => $request->label,
            'resume' => $request->resume,
            'denomination' => $request->denomination,
            'tel' => $request->phone,
            'mel' => $request->mel,
            'url' => $request->url,
            'url_profil' => $request->url_profil,
            'url_information' => $request->url_information,
            'url_participation' => $request->url_participation,
            'place_exec' => $request->place_exec,
            'code_nuts' => $request->code_nuts,
            'duration_year' => $request->duration_year,
            'duration_month' => $request->duration_month,
            'crm_funding' => $request->crm_funding,
            'crm_legal_form' => $request->crm_legal_form,
            'crm_langue' => $request->crm_lang,
            'cp_legal_situation' => $request->cp_legal_situation,
            'cp_eco' => $request->cp_eco,
            'cp_tech' => $request->cp_tech,
            'ca_ref' => $request->ca_ref,
            'rc_complement_info' => $request->rc_complement_info
        ]);

        $data = [
            'entity' => $tender->toArray(),
            'message' => 'Tender created successfully'
        ];

        return response()->json($data, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tender = Tender::find($id);
        return new TenderFullContentResource($tender);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $tender = Tender::where('id', $id)->update([
            'ref' => $request->ref,
            'slug' => $request->slug,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'city_id' => $request->city_id,
            'department_id' => $request->department_id,
            'country_id' => $request->country_id,
            'activity_id' => $request->activity_id,
            'procedure_type_id' => $request->procedure_type_id,
            'budget_type_id' => $request->budget_type_id,
            'state_id' => $request->state_id,
            'release_date' => $request->release_date,
            'closing_date' => $request->closing_date,
            'zip_code' => $request->zip_code,
            'link' => $request->link,
            'code' => $request->code,
            'label' => $request->label,
            'resume' => $request->resume,
            'denomination' => $request->denomination,
            'tel' => $request->phone,
            'mel' => $request->mel,
            'url' => $request->url,
            'url_profil' => $request->url_profil,
            'url_information' => $request->url_information,
            'url_participation' => $request->url_participation,
            'place_exec' => $request->place_exec,
            'code_nuts' => $request->code_nuts,
            'duration_year' => $request->duration_year,
            'duration_month' => $request->duration_month,
            'crm_funding' => $request->crm_funding,
            'crm_legal_form' => $request->crm_legal_form,
            'crm_langue' => $request->crm_lang,
            'cp_legal_situation' => $request->cp_legal_situation,
            'cp_eco' => $request->cp_eco,
            'cp_tech' => $request->cp_tech,
            'ca_ref' => $request->ca_ref,
            'rc_complement_info' => $request->rc_complement_info
        ]);

        $data = [
            'entity' => $tender->toArray(),
            'message' => 'Tender was updated successfully'
        ];

        return response()->json($data);
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
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveDocumentToFavorisTender(Request $request, int $id)
    {
        $favoris = Favoris::where(['tender_id' => $id, 'user_id' => Auth::id()])->get();
        if (!$favoris) {
            return response()->json([
                'message' => 'Forbidden'
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'files' => 'required',
            'type_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $files = $request->file('files');
        $files = is_array($files) ? $files : [$files];
        $doc_type_id = $request->get('type_id');

        $data = [];
        foreach($files as $file) {
            $path = $file->store($doc_type_id);
            $path = storage_path('app/'.$path);
            $size = filesize($path);
            $base64 = base64_encode(file_get_contents($path));
            $info = pathinfo($path);

            $document = Document::create([
                'title' => $request->get('name'),
                'type' => $info['extension'],
                'document_type_id' => $doc_type_id,
                'size' => $size,
                'base64' => $base64,
                'path' => $path,
                'user_id' => Auth::id(),
                'hash' => hash('sha256', file_get_contents($path)),
                'documentable_type' => \App\Models\UserTenderDocument::class,
                'documentable_id' => $id
            ]);

            $data[] = $document;
        }

        return response()->json([
            'data' => [
                'message' => "The file is sucessfully created",
                'files' => DocumentResource::collection($data)
            ]
        ]);
    }
}
