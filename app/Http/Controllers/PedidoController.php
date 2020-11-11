<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pedido_Videojuego;
use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use PedidoVideojuego;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Pedido = Pedido::orderBy('fecha', 'asc')->with(['tipo_entrega'])->get();
            $response = $Pedido;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el videojuego
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'fecha' => 'required|date',
                'direccion_entrega' => 'required|string',
                'subtotal' => 'required|string',
                'costo_envio' => 'required|string',
                'impuesto' => 'required|string',
                'total' => 'required|string',
                'estado' => 'required|string',
                'cliente_id' => 'required|string',
                'usuario_id' => 'required|string',
                'repartidor_id' => 'required|string',
                'tipo_entrega_id' => 'required|string',
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $pedido = new Pedido();
            $pedido->fecha = Carbon::parse($request->input('fecha'))->format('Y-m-d');
            $pedido->direccion_entrega = $request->input('direccion_entrega');
            $pedido->subtotal = $request->input('subtotal');
            $pedido->costo_envio = $request->input('costo_envio');
            $pedido->impuesto = $request->input('impuesto');
            $pedido->total = $request->input('total');
            $pedido->estado = 1;

            $pedido->cliente_id = $request->input('cliente_id');
            $pedido->usuario_id = $request->input('usuario_id');
            $pedido->repartidor_id = $request->input('repartidor_id');
            $pedido->tipo_entrega_id = $request->input('tipo_entrega_id');
            //Guardar el videojuego en la BD

            if ($pedido->save()) {
            /*
            Asociarle varias generos
            Relación de muchos a muchos
            https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
            */
                //Pedido_videojuego
                $detalleInput = $request->input('detalle');
                if (!is_array($request->input('detalle'))) {
                    $detalleInput =
                        explode(',', $request->input('detalle'));
                }
                if (!is_array($request->input('detalle'))) {
                    $detalleInput =
                        explode(',', $request->input('detalle'));
                }
                if (!is_null($request->input('detalle'))) {

                    foreach ($detalleInput as $detalleLinea) {

                        if (!is_array($detalleLinea)) {
                            $detalleLinea =
                                explode(',', $detalleLinea);
                        }

                        if (!is_array($detalleLinea)) {
                            $detalleLinea =
                                explode(',', $detalleLinea);
                        }

                        //Busqueda de videojuego de la linea
                        $videojuegoId = $detalleLinea[0];
                        $videojuego = Videojuego::find($videojuegoId);

                        //Guardar en la base
                        $detalladoGuardar = new Pedido_Videojuego();
                        $detalladoGuardar->pedido_id = $pedido->id;
                        $detalladoGuardar->videojuego_id = $videojuego->id;
                        $detalladoGuardar->cantidad = $detalleLinea[1];
                        $detalladoGuardar->total =  $detalleLinea[2];
                        $detalladoGuardar->save();
                    }
                }

                $response = 'Pedido realizado!';
                return response()->json($response, 201);

            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }



        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Pedido = Pedido::where('id', $id)->with(['cliente', 'usuario', 'repartidor', 'tipo_entrega', 'pedido_Videojuegos.videojuego'])->first();
            $response = $Pedido;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }
}
