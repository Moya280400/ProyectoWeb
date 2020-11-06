<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Vehiculo = Vehiculo::all();
            $response = $Vehiculo;
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
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'tipo_vehiculo_id' => 'required|string|max:1',
            'marca_id' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $vehiculo = new Vehiculo();
            $vehiculo->id = $request->input('id');
            $vehiculo->modelo = $request->input('modelo');
            $vehiculo->tipo_vehiculo_id = $request->input('tipo_vehiculo_id');
            $vehiculo->marca_id = $request->input('marca_id');

            //Guardar el videojuego en la BD
            if ($vehiculo->save()) {
                $response = 'Vehiculo creado!';
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
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Vehiculo = Vehiculo::where('id', $id)->first();
            $response = $Vehiculo;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'modelo' => 'required|string|max:255',
            'tipo_vehiculo_id' => 'required|string|max:1',
            'marca_id' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del videojuego
        $vehiculo = Vehiculo::find($id);
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->tipo_vehiculo_id = $request->input('tipo_vehiculo_id');
        $vehiculo->marca_id = $request->input('marca_id');


        //Actualizar videojuego
        if ($vehiculo->update()) {
            $response = 'Vehiculo actualizado!';
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
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculo $vehiculo)
    {
        //
    }
}
