<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\ProvinciaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-provincias', [ProvinciaController::class, 'index']);


// Tikets
Route::get('get-tikets', [TiketController::class, 'index']);
Route::get('get-tiket/{id}', [TiketController::class, 'show']);
Route::post('set-tiket', [TiketController::class, 'store']);
Route::put('update-tiket/{id}', [TiketController::class, 'update']);
Route::delete('delete-tiket/{id}', [TiketController::class, 'destroy']);
