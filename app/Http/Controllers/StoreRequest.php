<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class StoreRequest extends Controller
{
    public function store(Request $request)
    {
        Log::request($request);

        return response()->json(['status' => 'ok']);
    }
}
