<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BoampApiCallerService;
use App\Services\NoumaApiCallerService;

class ScraperController extends Controller
{
    /**
     * @param string $date
     * @return void
     */
    public function fetchTenderFromBoamp(Request $request, BoampApiCallerService $boamp) {
        $date = $request->get('date') ?? date('Y/m/d');
        $count = $request->get('count');
        $import_count = $boamp->fetchMarkets($date, $count);
        $message = $import_count >= 1 ? "The markets was imported successfully from BOAMP" : "No market found";

        return response()->json([
            'message' => $message,
            'count' => $import_count,
        ]);
    }
    /**
     * @param string $date
     * @return void
     */
    public function fetchTenderFromNouma(Request $request, NoumaApiCallerService $nouma) {
        $date = $request->get('date') ?? date('Y/m/d');
        $count = $request->get('count');
        $import_count = $nouma->fetchMarkets($date, $count);
        $message = $import_count >= 1 ? "The markets was imported successfully from NOUMA" : "No market found";

        return response()->json([
            'message' => $message,
            'count' => $import_count,
        ]);
    }

}
