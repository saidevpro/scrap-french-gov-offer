<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator; 

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($market_id = $request->get('market_id')) {
            $notes = Note::where('user_id', Auth::id())
                        ->where('tender_id', $market_id)
                        ->get(); 
        } else {
            $notes = Note::where('user_id', Auth::id())->get(); 
        }

        return response()->json([
            'data' => $notes 
        ]); 
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
            'content' => 'required|string',
            'market_id' => 'required'
        ]); 

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $note = Note::create([
            'content' => $request->get('content'),
            'tender_id' => $request->get('market_id'), 
            'user_id' => Auth::id()
        ]); 

        return response()->json([
            'message' => "The note was created successfully",
            'note' => $note
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id); 
        if (!Gate::allows('manage-note', $note)) {
            return response()->json([
                'message' => "Note not found",
            ], 404);
        }

        $note->delete();
        return response()->json([
            'message' => "The note is deleted successfully"
        ]); 
    }
}
