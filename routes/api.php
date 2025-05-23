<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\API\AuthController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('get-provincias', [ProvinciaController::class, 'index']);
});



// Tikets
Route::get('get-tikets', [TiketController::class, 'index']);
Route::get('get-tiket/{id}', [TiketController::class, 'show']);
Route::post('set-tiket', [TiketController::class, 'store']);
Route::put('update-tiket/{id}', [TiketController::class, 'update']);
Route::delete('delete-tiket/{id}', [TiketController::class, 'destroy']);
