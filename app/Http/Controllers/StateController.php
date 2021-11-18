<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

use Validator;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all();
        return response()->json($state);
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
        $state = State::create($validator->validated());
        return response()->json([
            'message' => 'state successfully created',
            'state' => $state
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        if (is_null($state)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($state);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
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

        if ($state->update($request->all())) {
            return response()->json([
                'success' => 'state successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No state found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        if($state->delete()) {
            return response()->json([
                'message' => 'state successfully deleted',
                'state' => $state
            ], 202);
        } else {
            return response()->json([
                'message' => 'state not found'
            ], 204);
        }
    }
}
