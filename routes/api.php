<?php

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//--- Auth module

Route::post('register', [RegisterController::class , 'store']);
Route::post('login', [SessionController::class , 'store']);
Route::post('logout', [SessionController::class , 'destroy'])->middleware('auth:sanctum');
