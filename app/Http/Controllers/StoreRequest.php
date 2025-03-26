<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class StoreRequest extends Controller
{
    public function store(Request $request)
    {
        try {
            Log::request($request);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 504]);
        }

        return response()->json(['status' => 'ok']);
    }
}
