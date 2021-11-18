<?php

namespace App\Http\Controllers;

use App\Models\ProcedureType;
use Illuminate\Http\Request;

use Validator;

class ProcedureTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedureType = ProcedureType::all();
        return response()->json($procedureType);
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
            'name' => 'required|string',
            'origine_procedure_type_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $procedureType = ProcedureType::create($validator->validated());
        return response()->json([
            'message' => 'procedureType successfully created',
            'procedureType' => $procedureType
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\ProcedureType  $procedureType
     * @return \Illuminate\Http\Response
     */
    public function show(ProcedureType $procedureType)
    {
        if (is_null($procedureType)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($procedureType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\ProcedureType  $procedureType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcedureType $procedureType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'origine_procedure_type_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($procedureType->update($request->all())) {
            return response()->json([
                'success' => 'procedureType successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No procedureType found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\ProcedureType  $procedureType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcedureType $procedureType)
    {
        if($procedureType->delete()) {
            return response()->json([
                'message' => 'procedureType successfully deleted',
                'procedureType' => $procedureType
            ], 202);
        } else {
            return response()->json([
                'message' => 'procedureType not found'
            ], 204);
        }
    }
}
