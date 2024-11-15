<?php

use App\Http\Controllers\API\TacheController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/users', [UserController::class, 'getUser']);
Route::post('/signup', [UserController::class, 'register']);
Route::resource('/taches', TacheController::class);
