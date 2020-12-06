<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DesarrolladorController;
use App\Http\Controllers\DistribuidorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\ImagenVideojuegoController;
use App\Http\Controllers\MarcaVehiculoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoEntregaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\EstadoPedidoController;
use App\Http\Controllers\FacturaController;
use App\Models\Cliente;
use App\Models\Estado_Pedido;
use App\Models\Genero;
use App\Models\Marca_vehiculo;
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
        Route::get('', [VideojuegoController::class, 'getVideojuegoAdmin'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::get('getVideojuegoActivo', [VideojuegoController::class, 'getVideojuegoActivo']);

        Route::post('filtradoGenero', [VideojuegoController::class, 'filtradoGenero'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::post('filtradoPlataforma', [VideojuegoController::class, 'filtradoPlataforma'])->middleware(['auth:api', 'scopes:Administrador']);

        Route::get('/{id}', [VideojuegoController::class, 'show']);
        Route::get('nombre/{nombre}', [VideojuegoController::class, 'getJuegoPorNombre']);
        Route::post('store', [VideojuegoController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[VideojuegoController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);
        //

    });
    //Rutas auth
    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
    //API Roles//
    Route::group(['prefix' => 'rol'], function () {

        Route::get('', [RolController::class, 'index']);

    });
    //
    //API Plataformas//
    Route::group(['prefix' => 'plataforma'], function () {

        Route::get('', [PlataformaController::class, 'index']);
        Route::get('/{id}', [PlataformaController::class, 'show']);
        Route::post('store', [PlataformaController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[PlataformaController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
    //
     //API Generos//
    Route::group(['prefix' => 'genero'], function () {
        Route::get('', [GeneroController::class, 'index']);
        Route::get('/{id}', [GeneroController::class, 'show']);
        Route::post('store', [GeneroController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}', [GeneroController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
    //
    //API Distribuidores//
    Route::group(['prefix' => 'distribuidor'], function () {

        Route::get('', [DistribuidorController::class, 'index']);
        Route::get('/{id}', [DistribuidorController::class, 'show']);
        Route::post('store', [DistribuidorController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[DistribuidorController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
    //
    //API Desarrolladores//
    Route::group(['prefix' => 'desarrollador'], function () {

        Route::get('', [DesarrolladorController::class, 'index']);
        Route::get('/{id}', [DesarrolladorController::class, 'show']);
        Route::post('store', [DesarrolladorController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[DesarrolladorController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
    //
    //API Marca_Vehiculo//
    Route::group(['prefix' => 'marca_vehiculo'], function () {

        Route::get('', [MarcaVehiculoController::class, 'index']);
        Route::get('/{id}', [MarcaVehiculoController::class, 'show']);
        Route::post('store', [MarcaVehiculoController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}', [MarcaVehiculoController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
     //
     //API tipo_entrega//
    Route::group(['prefix' => 'tipo_entrega'], function () {

        Route::get('', [TipoEntregaController::class, 'index']);
        Route::get('/{id}', [TipoEntregaController::class, 'show']);

    });
    //
    //API tipo_vehiculo//
    Route::group(['prefix' => 'tipo_vehiculo'], function () {

        Route::get('', [TipoVehiculoController::class, 'index']);
        Route::get('/{id}', [TipoVehiculoController::class, 'show']);

    });
    //
    //API Vehiculo//
    Route::group(['prefix' => 'vehiculo'], function () {

        Route::get('', [VehiculoController::class, 'index']);
        Route::get('/{id}', [VehiculoController::class, 'show']);
        Route::post('store', [VehiculoController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}', [VehiculoController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);

    });
     //
     //API cliente//
    Route::group(['prefix' => 'cliente'], function () {

        Route::get('', [ClienteController::class, 'index']);
        Route::get('/{id}', [ClienteController::class, 'show']);
        Route::post('store', [ClienteController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[ClienteController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);
    });
     //
    //API repartidor//
    Route::group(['prefix' => 'repartidor'], function () {

        Route::get('', [RepartidorController::class, 'index']);
        Route::get('/{id}', [RepartidorController::class, 'show']);
        Route::post('store', [RepartidorController::class, 'store'])->middleware(['auth:api', 'scopes:Administrador']);
        Route::patch('update/{id}',[RepartidorController::class, 'update'])->middleware(['auth:api', 'scopes:Administrador']);
    });
    //
    //API Usuario//
    Route::group(['prefix' => 'usuario'], function () {

        Route::get('', [UsuarioController::class, 'index']);
        Route::get('/{id}', [UsuarioController::class, 'show']);

    });
    //
    //API Pedido//
    Route::group(['prefix' => 'pedido'], function () {

        Route::get('', [PedidoController::class, 'index'])->middleware(['auth:api', 'scope:Administrador,Bodeguero']);
        Route::get('/{id}', [PedidoController::class, 'show'])->middleware(['auth:api', 'scope:Administrador,Bodeguero']);
        Route::post('store', [PedidoController::class, 'store'])->middleware(['auth:api', 'scopes:Vendedor']);
        Route::patch('update/{id}', [PedidoController::class, 'update'])->middleware(['auth:api', 'scopes:Bodeguero']);
        Route::get('/PedidoRepartidor/{id}', [PedidoController::class, 'PedidoPreparadoRepartidor'])->middleware(['auth:api', 'scopes:Bodeguero']);
    });
    //API EstadoPedido//
    Route::group(['prefix' => 'estado_pedido'], function () {

        Route::get('', [EstadoPedidoController::class, 'index'])->middleware(['auth:api', 'scopes:Bodeguero']);;
    });
    //

    Route::group(['prefix' => 'imagen_videojuego'], function () {

        Route::get('', [ImagenVideojuegoController::class, 'index']);

    });

    Route::group(['prefix' => 'factura'], function () {

        Route::get('', [FacturaController::class, 'index'])->middleware(['auth:api', 'scopes:Administrador']);;
        Route::get('/{id}', [FacturaController::class, 'show'])->middleware(['auth:api', 'scopes:Administrador']);;

    });
    //
});
