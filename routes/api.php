<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
route:: get('/test', function() {
    return response()->json(['message' => 'API is working!']);
});

route::get('/documents', [DocumentController::class, 'index']);
route::get('/documents/{id}', [DocumentController::class, 'show']);
route::post('/documents', [DocumentController::class, 'store']);
route::put('/documents/{id}', [DocumentController::class, 'update']);
route::delete('/documents/{id}', [DocumentController::class, 'destroy']);