<?php

namespace App\Http\Controllers;

use App\Models\Desarrollador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DesarrolladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Desarrollador=Desarrollador::all();
            $response=$Desarrollador;
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
            'descripcion' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $desarrollador = new Desarrollador();
            $desarrollador->descripcion = $request->input('descripcion');

            //Guardar el videojuego en la BD
            if ($desarrollador->save()) {
                $response = 'Desarrollador creado!';
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
     * @param  \App\Models\Desarrollador  $Desarrollador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Desarrollador=Desarrollador::where('id',$id)->first();
            $response=$Desarrollador;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desarrollador  $Desarrollador
     * @return \Illuminate\Http\Response
     */
    public function edit(Desarrollador $Desarrollador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desarrollador  $Desarrollador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del videojuego
        $desarrollador = Desarrollador::find($id);
        $desarrollador->descripcion = $request->input('descripcion');


        //Actualizar videojuego
        if ($desarrollador->update()) {
            $response = 'Desarrollador actualizado!';
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
     * @param  \App\Models\Desarrollador  $Desarrollador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desarrollador $Desarrollador)
    {
        //
    }
}
