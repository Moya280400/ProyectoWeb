<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DesarrolladorController;
use App\Http\Controllers\DistribuidorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\MarcaVehiculoController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoEntregaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\VideojuegoController;
use App\Models\Cliente;
use App\Models\Genero;
use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
    Perdedor de la playstation 5
|
*/

Route::group(['prefix' => 'proyectowb'], function () {
    Route::group(['prefix' => 'videojuego'], function () {


        //API Videojuegos//
        Route::get('', [VideojuegoController::class, 'getVideojuegoAdmin']);
        Route::get('getVideojuegoActivo', [VideojuegoController::class, 'getVideojuegoActivo']);
        Route::get('/{nombre}', [VideojuegoController::class, 'getJuegoPorNombre']);
        //
    });
    Route::group(['prefix' => 'rol'], function () {
        //API Roles//
        Route::get('', [RolController::class, 'index']);
        //
    });
    Route::group(['prefix' => 'plataforma'], function () {
        //API Plataformas//
        Route::get('', [PlataformaController::class, 'index']);
        Route::get('/{id}', [PlataformaController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'genero'], function () {
        //API Generos//
        Route::get('', [GeneroController::class, 'index']);
        Route::get('/{id}', [GeneroController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'distribuidor'], function () {
        //API Distribuidores//
        Route::get('', [DistribuidorController::class, 'index']);
        Route::get('/{id}', [DistribuidorController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'desarrollador'], function () {
        //API Desarrolladores//
        Route::get('', [DesarrolladorController::class, 'index']);
        Route::get('/{id}', [DesarrolladorController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'marca_vehiculo'], function () {
        //API Marca_Vehiculo//
        Route::get('', [MarcaVehiculoController::class, 'index']);
        Route::get('/{id}', [MarcaVehiculoController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'tipo_entrega'], function () {
        //API tipo_entrega//
        Route::get('', [TipoEntregaController::class, 'index']);
        Route::get('/{id}', [TipoEntregaController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'tipo_vehiculo'], function () {
        //API tipo_vehiculo//
        Route::get('', [TipoVehiculoController::class, 'index']);
        Route::get('/{id}', [TipoVehiculoController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'vehiculo'], function () {
        //API Vehiculo//
        Route::get('', [VehiculoController::class, 'index']);
        Route::get('/{id}', [VehiculoController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'cliente'], function () {
        //API cliente//
        Route::get('', [ClienteController::class, 'index']);
        Route::get('/{id}', [ClienteController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'repartidor'], function () {
        //API repartidor//
        Route::get('', [RepartidorController::class, 'index']);
        Route::get('/{id}', [RepartidorController::class, 'show']);
        //
    });
    Route::group(['prefix' => 'usuario'], function () {
        //API repartidor//
        Route::get('', [UsuarioController::class, 'index']);
        Route::get('/{id}', [UsuarioController::class, 'show']);
        //
    });
});
