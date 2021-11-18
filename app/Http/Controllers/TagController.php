<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        return response()->json($tag);
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
        $tag = Tag::create($validator->validated());
        return response()->json([
            'message' => 'tag successfully created',
            'tag' => $tag
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        if (is_null($tag)) {
            return response()->json(['message'=>'No Content'], 204);
        }
        return response()->json($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
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

        if ($tag->update($request->all())) {
            return response()->json([
                'success' => 'tag successfully updated'
            ], 200);
        } else {
            return response()->json(['message'=>'No tag found '], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if($tag->delete()) {
            return response()->json([
                'message' => 'tag successfully deleted',
                'tag' => $tag
            ], 202);
        } else {
            return response()->json([
                'message' => 'tag not found'
            ], 204);
        }
    }
}
