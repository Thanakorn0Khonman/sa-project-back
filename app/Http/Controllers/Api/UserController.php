<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUserData(Request $request)
    {
        // Retrieve the authenticated user's data
        $user = $request->user()->role;

        return response()->json($user);
    }
    public function show(User $user)
    {
        return $user;
    }
}
