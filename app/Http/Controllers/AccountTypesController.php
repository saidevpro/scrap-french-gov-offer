<?php

namespace App\Http\Controllers;

use App\Models\AccountTypes;
use Illuminate\Http\Request;

use Validator;

class AccountTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountTypes = AccountTypes::all();
        return response()->json($accountTypes);
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
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $accountTypes = AccountTypes::create($validator->validated());
        return response()->json([
            'message' => 'AccountTypes successfully created',
            'accountTypes' => $accountTypes
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountTypes  $accountTypes
     * @return \Illuminate\Http\Response
     */
    public function show(AccountTypes $accountTypes)
    {
        if (is_null($accountTypes)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($accountTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccountTypes  $accountTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountTypes $accountTypes)
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

        if ($accountTypes->update($request->all())) {
            return response()->json([
                'success' => 'AccountTypes successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No accountTypes found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountTypes  $accountTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountTypes $accountTypes)
    {
        if($accountTypes->delete()) {
            return response()->json([
                'message' => 'AccountTypes successfully deleted',
                'accountTypes' => $accountTypes
            ], 202);
        } else {
            return response()->json([
                'message' => 'accountTypes not found'
            ], 204);
        }
    }
}
