<?php

namespace App\Http\Controllers;

use App\Http\Resources\FolderResource;
use App\Models\Document;
use App\Models\Folder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->get('type');
        if ($type && in_array($type , array_keys(Folder::TYPES))) {
            $folders = Folder::where([
                'type' => Folder::TYPES[$type],
                'user_id' => Auth::id()
            ])->get();
        } else {
            $folders = [];
        }

        return response()->json([
            'data' => FolderResource::collection($folders)
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
            'name' => 'required|string',
            'type' => [
                'required',
                Rule::in(array_keys(Folder::TYPES)),
            ]
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $type = $request->get('type');
        $name = $request->get('name');

        $folder = Folder::create([
            'name' => $name,
            'type' => Folder::TYPES[$type],
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'message' => 'The folder is successfully created',
            'folder' => new FolderResource($folder)
        ]);
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
        $folder = Folder::find($id);
        if (!$folder || !Gate::allows('manage-folder', $folder)) {
            return response()->json([
                'message' => "Folder not found",
            ], 404);
        }

        $data = [];
        if ($name = $request->get('name')) {
            $data['name'] = $name;
        }

        $folder->update($data);
        return response()->json([
            'message' => "The folder successfully updated",
            'folder' => new FolderResource($folder),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $folder = Folder::find($id);
        if (!$folder || !Gate::allows('manage-folder', $folder)) {
            return response()->json([
                'message' => "Folder not found",
            ], 404);
        }

        $folder->delete();
        return response()->json([
            'message' => "The folder successfully deleted"
        ], 200);
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function bindDocuments($id, Request $request)
    {
        if (!$request->documents) {
            return response()->json([
                'message' => "Request error",
            ], 401);
        }

        $documents_id = $request->documents;

        foreach($documents_id as $d_id) {
            $document = Document::find($d_id);

            // if (!Gate::allows($document)) {
            //     return response()->json([
            //         'message' => "Document not found",
            //     ], 404);
            // }

            $document->update([
                'folder_id' => $id
            ]);
        }

        return response()->json([
            'message' => "The documents was updated successfully"
        ], 200);
    }
}
