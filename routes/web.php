<?php

use App\Http\Controllers\StoreRequest;
use Illuminate\Support\Facades\Route;

Route::any('{any}', [StoreRequest::class, 'store'])
    ->where('any', '.*');
