<?php

namespace App\Http\Controllers;

use App\Models\TenderAdditionalAddresse;
use Illuminate\Http\Request;

use Validator;

class TenderAdditionalAddresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenderAdditionalAddresse = TenderAdditionalAddresse::all();
        return response()->json($tenderAdditionalAddresse);
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
            'tender_id' => 'required|integer',
            'additional_address_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $tenderAdditionalAddresse = TenderAdditionalAddresse::create($validator->validated());
        return response()->json([
            'message' => 'TenderAdditionalAddresse successfully created',
            'tenderAdditionalAddresse' => $tenderAdditionalAddresse
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\TenderAdditionalAddresse  $tenderAdditionalAddresse
     * @return \Illuminate\Http\Response
     */
    public function show(TenderAdditionalAddresse $tenderAdditionalAddresse)
    {
        if (is_null($tenderAdditionalAddresse)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($tenderAdditionalAddresse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\TenderAdditionalAddresse  $tenderAdditionalAddresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderAdditionalAddresse $tenderAdditionalAddresse)
    {
        $validator = Validator::make($request->all(), [
            'tender_id' => 'required|integer',
            'additional_address_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($tenderAdditionalAddresse->update($request->all())) {
            return response()->json([
                'success' => 'tenderAdditionalAddresse successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No tenderAdditionalAddresse found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\TenderAdditionalAddresse  $tenderAdditionalAddresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderAdditionalAddresse $tenderAdditionalAddresse)
    {
        if($tenderAdditionalAddresse->delete()) {
            return response()->json([
                'message' => 'tenderAdditionalAddresse successfully deleted',
                'tenderAdditionalAddresse' => $tenderAdditionalAddresse
            ], 202);
        } else {
            return response()->json([
                'message' => 'tenderAdditionalAddresse not found'
            ], 204);
        }
    }
}
