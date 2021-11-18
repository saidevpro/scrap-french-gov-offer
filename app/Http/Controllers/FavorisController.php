<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavorisResource;
use App\Http\Resources\TenderSimpleResource;
use App\Models\Favoris;
use App\Models\FolderItem;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $follows = Favoris::where('user_id', Auth::id())->get();
        $follows->load('tender');
        return FavorisResource::collection($follows);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('can-add-favoris')) {
            return response()->json([
                'message' => "Unauthorized"
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'tender_id' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $favoris = Favoris::firstOrcreate([
            'tender_id' => $request->get('tender_id'),
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'message' => 'Favoris successfully created',
            'favoris' => $favoris
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  App\Models\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $favoris = Favoris::find($id);
        if (!$favoris || !Gate::allows('manage-follow', $favoris) || !$request->has('folder_id')) {
            return response()->json([
                'message' => "Folder not found",
            ], 404);
        }

        $folder_id = (int) $request->get('folder_id');
        $folder_id = $folder_id != 0 ? $folder_id : null;
        $favoris->update(['folder_id' => $folder_id]);

        return response()->json([
            'success' => 'Favoris successfully updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $tender_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $tender_id)
    {
        $favoris = Favoris::find($tender_id);

        if (!$favoris || !Gate::allows('manage-follow', $favoris)) {
            return response()->json([
                'message' => 'Favoris not found'
            ], 404);
        }

        $favoris->delete();
        return response()->json([
            'message' => 'Favoris successfully deleted',
            'favoris' => $favoris
        ], 202);
    }
    /**
     * Get favorite market statistics
     * @return \Illuminate\Http\Response
     */
    public function favorisStats(Request $request)
    {
        $user_id = Auth::id();
        $ckey = $request->ckey ?? 10;
        $ccpv = $request->ccpv ?? 10;
        $cpvs = $this->getMostUseCpv($user_id, $ccpv);
        $cpvs = DB::table('cpv')->select(['name', 'code'])
                        ->whereIn('code', array_keys($cpvs))
                        ->get();

        $keywords = $this->getMostUseKeywords($user_id , $ckey);
        return response()->json([
            'data' => [
                'keywords' => array_keys($keywords),
                'cpv' => $cpvs
            ],
            'meta' => [
                'item_order' => 'desc'
            ]
        ]);
    }
    /**
     * Get keywords by occurance
     * @param int $user_id
     * @return array
     */
    public function getMostUseKeywords(int $user_id, int $limit)
    {
        $collection = DB::table('tenders')->select(['tenders.title', 'tenders.content'])
            ->join('favoris', 'favoris.tender_id', 'tenders.id')
            ->where('favoris.user_id', $user_id)
            ->get();

        $string =  $collection->reduce(function ($str, $model) {
            return $str.' '.$model->title.' '.$model->content;
        });

        $string = preg_split("/[\s.,;]+/", $string);
        $data = [];

        foreach($string as $str) {
            if (strlen($str) < 4) continue;
            $data[$str] = isset($data[$str]) ? $data[$str] + 1 : 1;
        }

        arsort($data);
        if ($limit) return array_slice($data, 0, $limit);
        return $data;
    }
    /**
     * Get keywords by occurance
     * @param int $user_id
     * @return array
     */
    public function getMostUseCpv(int $user_id, int $limit)
    {
        $collection = DB::table('favoris')->select(['cpv.name', 'cpv.code'])
                            ->join('tender_cpv', 'tender_cpv.tender_id', 'favoris.tender_id')
                            ->join('cpv', 'cpv.id', 'tender_cpv.cpv_id')
                            ->where('favoris.user_id', $user_id)
                            ->get();
        $data = [];
        $collection->each(function ($model) use(&$data) {
            $code = $model->code;
            $data[$code] = isset($data[$code]) ? $data[$code] + 1 : 1;
        });

        arsort($data);
        if ($limit) return array_slice($data, 0, $limit);
        return $data;
    }

}
