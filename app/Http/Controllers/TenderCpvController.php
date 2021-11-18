<?php

namespace App\Http\Controllers;

use App\Models\TenderCpv;
use Illuminate\Http\Request;

use Validator;

class TenderCpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenderCpv = TenderCpv::all();
        return response()->json($tenderCpv);
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
            'cpv_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $tenderCpv = TenderCpv::create($validator->validated());
        return response()->json([
            'message' => 'tenderCpv successfully created',
            'tenderCpv' => $tenderCpv
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\TenderCpv  $tenderCpv
     * @return \Illuminate\Http\Response
     */
    public function show(TenderCpv  $tenderCpv)
    {
        if (is_null($tenderCpv)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($tenderCpv);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\TenderCpv  $tenderCpv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderCpv  $tenderCpv)
    {
        $validator = Validator::make($request->all(), [
            'tender_id' => 'required|integer',
            'cpv_id' => 'required|integer'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($tenderCpv->update($request->all())) {
            return response()->json([
                'success' => 'tenderCpv successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No tenderCpv found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\TenderCpv  $tenderCpv
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderCpv  $tenderCpv)
    {
        if($tenderCpv->delete()) {
            return response()->json([
                'message' => 'tenderCpv successfully deleted',
                'tenderCpv' => $tenderCpv
            ], 202);
        } else {
            return response()->json([
                'message' => 'tenderCpv not found'
            ], 204);
        }
    }
}
