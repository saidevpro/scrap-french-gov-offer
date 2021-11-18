<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return response()->json(['data' => $countries]);
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
        $country = Country::create($validator->validated());
        return response()->json([
            'message' => 'Country successfully created',
            'country' => $country
        ], 201);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(Country $country)
    {
        if (is_null($country)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
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

        if ($country->update($request->all())) {
            return response()->json([
                'success' => 'Country successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No country found '], 204);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if($country->delete()) {
            return response()->json([
                'message' => 'Country successfully deleted',
                'country' => $country
            ], 202);
        } else {
            return response()->json([
                'message' => 'Country not found'
            ], 204);
        }

    }
}
