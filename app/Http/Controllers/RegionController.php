<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Get list of regions
     *  @return Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Region::all()
        ]);
    }
}
