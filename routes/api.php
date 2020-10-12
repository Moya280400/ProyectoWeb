<?php

use App\Http\Controllers\VideojuegoController;
use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'proyectowb'], function () {
    Route::group(['prefix' => 'videojuego'], function () {


        //API Videojuegos//
        Route::get('', [VideojuegoController::class,'getVideojuegoAdmin']);
        Route::get('getVideojuegoActivo', [VideojuegoController::class, 'getVideojuegoActivo']);
        Route::get('/{nombre}', [VideojuegoController::class, 'getJuegoPorNombre']);

        //
    });
});
