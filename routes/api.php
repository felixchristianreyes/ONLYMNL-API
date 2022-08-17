<?php

use App\Http\Controllers\API\MarkersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('markers', [MarkersController::class, 'index']);
Route::post('add-markers', [MarkersController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
