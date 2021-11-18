<?php

namespace App\Http\Controllers;

use App\Models\TenderTag;
use Illuminate\Http\Request;

class TenderTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenderTag = TenderTag::all();
        return response()->json($tenderTag);
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
            'tag_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $tenderTag = TenderTag::create($validator->validated());
        return response()->json([
            'message' => 'TenderTag successfully created',
            'TenderTag' => $tenderTag
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\TenderTag  $tenderTag
     * @return \Illuminate\Http\Response
     */
    public function show(TenderTag $tenderTag)
    {
        if (is_null($tenderTag)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($tenderTag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\TenderTag  $tenderTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderTag $tenderTag)
    {
        $validator = Validator::make($request->all(), [
            'tender_id' => 'required|integer',
            'tag_id' => 'required|integer'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($tenderTag->update($request->all())) {
            return response()->json([
                'success' => 'tenderTag successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No tenderTag found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\TenderTag  $tenderTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderTag $tenderTag)
    {
        if($tenderTag->delete()) {
            return response()->json([
                'message' => 'tenderTag successfully deleted',
                'tenderTag' => $tenderTag
            ], 202);
        } else {
            return response()->json([
                'message' => 'tenderTag not found'
            ], 204);
        }
    }
}
