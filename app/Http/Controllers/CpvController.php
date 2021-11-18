<?php

namespace App\Http\Controllers;

use App\Models\Cpv;
use Illuminate\Http\Request;

use Validator;

class CpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpv = Cpv::all();
        return response()->json($cpv);
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
            'code' => 'required|string',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $cpv = Cpv::create($validator->validated());
        return response()->json([
            'message' => 'cpv successfully created',
            'cpv' => $cpv
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cpv  $cpv
     * @return \Illuminate\Http\Response
     */
    public function show(Cpv $cpv)
    {
        if (is_null($cpv)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($cpv);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cpv  $cpv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cpv $cpv)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($cpv->update($request->all())) {
            return response()->json([
                'success' => 'Cpv successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No cpv found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cpv  $cpv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cpv $cpv)
    {
        if($cpv->delete()) {
            return response()->json([
                'message' => 'Cpv successfully deleted',
                'cpv' => $cpv
            ], 202);
        } else {
            return response()->json([
                'message' => 'Cpv not found'
            ], 204);
        }
    }
}
