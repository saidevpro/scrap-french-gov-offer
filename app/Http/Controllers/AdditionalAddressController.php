<?php

namespace App\Http\Controllers;

use App\Models\AdditionalAddress;
use Illuminate\Http\Request;

use Validator;

class AdditionalAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additionalAddress = AdditionalAddress::all();
        return response()->json($additionalAddress);
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
            'type' => 'required|string',
            'denomination' => 'string',
            'corresponding' => 'string',
            'address' => 'string',
            'tel' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fax' => 'string',
            'mel' => 'string',
            'url' => 'string',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $additionalAddress = AdditionalAddress::create($validator->validated());
        return response()->json([
            'message' => 'AdditionalAddress successfully created',
            'additionalAddress' => $additionalAddress
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\AdditionalAddress  $additionalAddress
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalAddress $additionalAddress)
    {
        if (is_null($additionalAddress)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($additionalAddress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\AdditionalAddress  $additionalAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdditionalAddress $additionalAddress)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string',
            'denomination' => 'string',
            'corresponding' => 'string',
            'address' => 'string',
            'tel' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'fax' => 'string',
            'mel' => 'string',
            'url' => 'string',
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($additionalAddress->update($request->all())) {
            return response()->json([
                'success' => 'additionalAddress successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No additionalAddress found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\AdditionalAddress  $additionalAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalAddress $additionalAddress)
    {
        if($additionalAddress->delete()) {
            return response()->json([
                'message' => 'additionalAddress successfully deleted',
                'additionalAddress' => $additionalAddress
            ], 202);
        } else {
            return response()->json([
                'message' => 'additionalAddress not found'
            ], 204);
        }
    }
}
