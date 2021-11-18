<?php

namespace App\Http\Controllers;

use App\Models\OrigineProcedureType;
use Illuminate\Http\Request;

use Validator;

class OrigineProcedureTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $origineProcedureType = OrigineProcedureType::all();
        return response()->json($origineProcedureType);
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
            'name' => 'required|string'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $origineProcedureType = OrigineProcedureType::create($validator->validated());
        return response()->json([
            'message' => 'OrigineProcedureType successfully created',
            'origineProcedureType' => $origineProcedureType
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\OrigineProcedureType  $origineProcedureType
     * @return \Illuminate\Http\Response
     */
    public function show(OrigineProcedureType $origineProcedureType)
    {
        if (is_null($origineProcedureType)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($origineProcedureType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\OrigineProcedureType  $origineProcedureType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrigineProcedureType $origineProcedureType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($origineProcedureType->update($request->all())) {
            return response()->json([
                'success' => 'OrigineProcedureType successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No origineProcedureType found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\OrigineProcedureType  $origineProcedureType
     * @return \Illuminate\Http\Response
     */
    public function destroy($origineProcedureType)
    {
        if($origineProcedureType->delete()) {
            return response()->json([
                'message' => 'OrigineProcedureType successfully deleted',
                'origineProcedureType' => $origineProcedureType
            ], 202);
        } else {
            return response()->json([
                'message' => 'OrigineProcedureType not found'
            ], 204);
        }
    }
}
