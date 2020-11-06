<?php

namespace App\Http\Controllers;

use App\Models\Marca_Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MarcaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Marca_Vehiculo=Marca_Vehiculo::all();
            $response=$Marca_Vehiculo;
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
            'descripcion' => 'required|string|max:500',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $marca_vehiculo = new Marca_Vehiculo();
            $marca_vehiculo->descripcion = $request->input('descripcion');

            //Guardar marca vehiculo en la BD
            if ($marca_vehiculo->save()) {
                $response = 'Marca vehiculo creado!';
                return response()->json($response, 200);
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
     * @param  \App\Models\marca_vehiculo  $marca_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Marca_Vehiculo=Marca_Vehiculo::where('id',$id)->first();
            $response=$Marca_Vehiculo;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marca_vehiculo  $marca_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(marca_vehiculo $marca_vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\marca_vehiculo  $marca_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del marca
        $marca_vehiculo = Marca_Vehiculo::find($id);
        $marca_vehiculo->descripcion = $request->input('descripcion');


        //Actualizar videojuego
        if ($marca_vehiculo->update()) {
            $response = 'Marca vehiculo actualizado!';
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
     * @param  \App\Models\marca_vehiculo  $marca_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(marca_vehiculo $marca_vehiculo)
    {
        //
    }
}
