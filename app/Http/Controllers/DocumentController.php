<?php

namespace App\Http\Controllers;

use App\Http\Resources\DocumentResource;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Auth::user()->documents->reverse();
        return DocumentResource::collection($documents);
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
            'files' => 'required',
            'type_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $count_documents = Auth::user()->documents->count();
        if ($count_documents >= 1) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $files = $request->file('files');
        $files = is_array($files) ? $files : [$files];
        $doc_type_id = $request->get('type_id');

        $data = [];
        foreach($files as $file) {
            if (count($data) === 1) {
                break;
            }

            $path = $file->store($doc_type_id);
            $path = storage_path('app/'.$path);
            $size = filesize($path);
            $base64 = base64_encode(file_get_contents($path));
            $info = pathinfo($path);
            $document = new Document ([
                'title' => $request->get('name'),
                'type' => $info['extension'],
                'document_type_id' => $doc_type_id,
                'size' => $size,
                'base64' => $base64,
                'path' => $path,
                'hash' => hash('sha256', file_get_contents($path)),
            ]);
            $document->documentable()->associate(Auth::user());
            $document->save();
            $data[] = $document;
        }

        return response()->json([
            'data' => [
                'message' => "The file is sucessfully created",
                'files' => DocumentResource::collection($data)
            ]
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
        $document = Document::find($id);
        if (!Gate::allows('manage-document', $document)) {
            return response()->json([
                'message' => "Document not found",
            ], 404);
        }

        return new DocumentResource($document);
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
        $document = Document::find($id);

        if (!Gate::allows('manage-document', $document)) {
            return response()->json([
                'message' => "Document not found",
            ], 404);
        }

        $document->delete();
        return response()->json([
            'message' => "Document deleted successfully",
        ]);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function types() {
        $types = DocumentType::whereNotIn('slug', ['template', 'dce', 'tender_pdf'])->get();
        return response()->json([
            'data' => $types
        ]);
    }
    /**
     * @param int $id
     */
    public function updateFolderToEmpty($id)
    {
        $document = Document::find($id);
        $document->update(['folder_id' => null]);

        return response()->json([
            'message' => "Document updated successufully",
        ]);
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function getTemplateDocuments()
    {
        $template_documents = Document::template()->get();
        return response()->json([
            'data' => DocumentResource::collection($template_documents)
        ]);
    }
}
