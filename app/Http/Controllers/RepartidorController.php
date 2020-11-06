<?php

namespace App\Http\Controllers;

use App\Models\Repartidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Repartidor=Repartidor::all();
            $response=$Repartidor;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
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
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|max:12|min:9',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:8',
            'vehiculo_id' => 'required|string|max:8',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $repartidor = new Repartidor();
            $repartidor->id = $request->input('id');
            $repartidor->nombre = $request->input('nombre');
            $repartidor->correo = $request->input('correo');
            $repartidor->telefono = $request->input('telefono');
            $repartidor->vehiculo_id = $request->input('vehiculo_id');

            $repartidor->estado = 1;

            //Guardar el videojuego en la BD
            if ($repartidor->save()) {
                $response = 'Repartidor creado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }
        } catch (\Exeption $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Repartidor=Repartidor::where('id',$id)->first();
            $response=$Repartidor;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function edit(repartidor $repartidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|min:5',
            'correo' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:8',
            'vehiculo_id' => 'required|string|max:8',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del videojuego
        $repartidor = Repartidor::find($id);
        $repartidor->nombre = $request->input('nombre');
        $repartidor->correo = $request->input('correo');
        $repartidor->telefono = $request->input('telefono');
        $repartidor->vehiculo_id = $request->input('vehiculo_id');
        $repartidor->estado = $request->input('estado');


        //Actualizar videojuego
        if ($repartidor->update()) {
            $response = 'Repartidor actualizado!';
            return response()->json($response, 200);
        }
        $response = [
            'msg' => 'Error durante la actualización'
        ];

        return response()->json($response, 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(repartidor $repartidor)
    {
        //
    }
}
