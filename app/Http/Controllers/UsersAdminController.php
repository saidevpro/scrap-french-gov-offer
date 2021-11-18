<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResourceAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)->paginate(10);
        return UserResourceAdmin::collection($users);
    }
    /**
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function activateUser(Request $request)
    {
        if (!$request->user) {
            return response()->json([
                'message' => "The id is required"
            ], 402);
        }

        $user = User::find($request->user);
        if (!$user) {
            return response()->json([
                'message' => "Not found"
            ], 404);
        }

        $user->update(['is_verify' => true]);

        return response()->json([
            'message' => "The user were activated successfully"
        ], 200);
    }
}
