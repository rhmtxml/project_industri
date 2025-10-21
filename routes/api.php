<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\IndustriController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('industri',IndustriController::class);
