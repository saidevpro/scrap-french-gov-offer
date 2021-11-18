<?php

namespace App\Http\Controllers;

use App\Models\TurnoverSlice;
use Illuminate\Http\Request;

class TurnoverController extends Controller
{
    /**
     * @return Response
     */
    public function slices()
    {
        return response()->json([
            'data' => TurnoverSlice::all()
        ]); 
    }
}
