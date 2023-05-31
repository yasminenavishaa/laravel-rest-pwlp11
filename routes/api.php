<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ApiAuthController;

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

Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('/mahasiswas',MahasiswaController::class);
    Route::get('/logout',[ApiAuthController::class,'logout']);
});

Route::get('/hello', function(){
   $data=["massage"=>"hello word"];
    return response()->json($data);
});

//Route::get('/hello',function(){
//    return "hello word";
//});

//Route::apiResource('/mahasiswas',MahasiswaController::class);
//Route::post('/login',[ApiAuthController::class,'login']);
