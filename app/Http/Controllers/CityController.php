<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($search = $request->get('s')) {
            $cities = City::where('name', 'like', mb_strtolower($search).'%')
                        ->orderBy('name', 'desc')
                        ->limit(5)
                        ->get();
        } else {
            $cities = City::limit(5)->get();
        }

        return response()->json(['data' => $cities]);
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
            'department_id' => 'required|integer',
            'country_id' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $city = City::create($validator->validated());
        return response()->json([
            'message' => 'City successfully created',
            'city' => $city
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        if (is_null($city)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'code' => 'required|string',
            'department_id' => 'required|integer',
            'country_id' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        if($request->input('id')) {
            return response()->json(['name' => 'Remove The id field from body.'], 400);
        }

        if ($city->update($request->all())) {
            return response()->json([
                'success' => 'City successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No city found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        if($city->delete()) {
            return response()->json([
                'message' => 'City successfully deleted',
                'city' => $city
            ], 202);
        } else {
            return response()->json([
                'message' => 'city not found'
            ], 204);
        }
    }
}
