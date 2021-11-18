<?php

namespace App\Http\Controllers;

use App\Models\ViewReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->object_id) {
            return response()->json([
                'data' => [
                    'count_view' => 0,
                ]
            ]);
        }

        return response()->json([
            'data' => [
                'count_view' => $this->getUrlReportStat($request->object_id),
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        list($type, $ip, $user_id, $url, $object_id) = [$request->get('type'), $request->ip(), Auth::id(), $request->url, $request->object_id];

        switch($type) {
            case "tender_view":
                $reportable_type = \App\Models\Tender::class;
                break;
            case "company_page":
                $reportable_type = \App\Models\Company::class;
                break;
            case "search_result":
                $reportable_type = \App\Models\Company::class;
                break;
            default:
                $reportable_type = null;
        }

        if (!$this->reportShouldBeRegistered($request)) {
            return response()->json([
                'message' => "The report was register successfully",
                'data' => [
                    'count_view' => $this->getUrlReportStat($object_id, $reportable_type),
                ]
            ]);
        }

        ViewReport::create([
            'url' => $url,
            'type' => $type,
            'user_id' => $user_id,
            'ip' => $ip,
            'reportable_type' => $reportable_type,
            'reportable_id' => $object_id,
        ]);

        return response()->json([
            'message' => "The report was register successfully",
            'data' => [
                'count_view' => $this->getUrlReportStat($object_id, $reportable_type),
            ]
        ]);
    }
    /**
     * @param \Illuminate\Http\Request
     * @return Bool
     */
    private function reportShouldBeRegistered(Request $request)
    {
        if ($request->type === 'search_result') {
            return true;
        }

        list($type, $ip, $user_id) = [$request->get('type'), $request->ip(), Auth::id()];

        $viewreport = ViewReport::where('type', $type)->where('reportable_id', $request->object_id)->where(function ($query) use($user_id, $ip) {
            $query->where('ip', $ip);
            if ($user_id) {
                $query->orWhere('user_id', $user_id);
            }
        })->exists();

        return !$viewreport;
    }
    /**
     * @param string $url
     * @return array
     */
    private function getUrlReportStat($object_id, $object_type = \App\Models\Company::class)
    {
        $count = ViewReport::select(DB::raw('count(*) as total, type'))
            ->where('reportable_id', $object_id)
            ->where('reportable_type', $object_type)
            ->groupBy('type')
            ->get();

        return $count;
    }
}
