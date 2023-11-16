<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\LoginApiController;
use App\Http\Controllers\Api\DataRekeningApiController;

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

Route::post('login', [LoginApiController::class, 'index']);
Route::post('logout', [LoginApiController::class, 'logout']);

Route::resource('data-rekening', DataRekeningApiController::class)->middleware('auth:sanctum');
Route::resource('user', UserApiController::class)->middleware('auth:sanctum');

