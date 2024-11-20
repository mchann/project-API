<?php

use App\Http\Controllers\API\V1\JenisPenggunaController;
use App\Http\Controllers\API\V1\PenggunaController;
use App\Http\Controllers\API\V1\ProdukController;
use App\Http\Controllers\API\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('v1')->group(function(): void{
    Route::apiResource('/penggunas',PenggunaController::class);
    Route::patch('/penggunas/{pengguna}/jenis',
    JenisPenggunaController::class);
});

Route::prefix('v1')->group(function(): void{
    Route::apiResource('/produks',ProdukController::class);
    
});

Route::prefix('v1')->group(function(){
    
    Route::controller(AuthController::class)->group(function(){
        Route::post('register', 'register');
        Route::post('login','login');
        Route::post('/logout','logout')->middleware('auth:sanctum');
    });
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('/penggunas', PenggunaController::class);
    Route::patch('/penggunas/{pengguna}/jenis', JenisPenggunaController::class);
});

});