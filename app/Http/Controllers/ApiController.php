<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        // Your API logic here
        return response()->json(['message' => 'API response'], 200);
    }
}