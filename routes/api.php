<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorfoodController;
use App\Http\Controllers\IdController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('korfood',[KorfoodController::class,'index']);
Route::get('idkorfood', [IdController::class, 'getId']);
Route::post('korfood',[KorfoodController::class,'create']);
Route::put('korfood',[KorfoodController::class,'update']);
Route::delete('korfood',[KorfoodController::class,'delete']);
