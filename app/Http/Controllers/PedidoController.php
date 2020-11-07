<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pedido_Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
                'estado' => 'required|string',
                'cliente_id' => 'required|string',
                'usuario_id' => 'required|string',
                'reparidor_id' => 'required|string',
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
            $pedido->reparidor_id = $request->input('reparidor_id');
            $pedido->tipo_entrega_id = $request->input('tipo_entrega_id');
            //Guardar el videojuego en la BD

            if ($pedido->save()) {
            /*
            Asociarle varias generos
            Relación de muchos a muchos
            https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
            */
                //Pedido_videojuego
                $detalle = $request->input('detalle');
                if (!is_array($request->input('detalle'))) {
                    $detalle =
                        explode(',', $request->input('detalle'));
                }
                if (!is_array($request->input('detalle'))) {
                    $detalle =
                        explode(',', $request->input('detalle'));
                }
                if (!is_null($request->input('detalle'))) {

                    $pedido->pedido_Videojuegos()->attach($detalle);
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
