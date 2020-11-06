<?php

namespace App\Http\Controllers;

use App\Models\Distribuidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Distribuidor=Distribuidor::all();
            $response=$Distribuidor;
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
            $distribuidor = new Distribuidor();
            $distribuidor->descripcion = $request->input('descripcion');

            //Guardar el videojuego en la BD
            if ($distribuidor->save()) {
                $response = 'Distribuidor creado!';
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
     * @param  \App\Models\Distribuidor  $Distribuidor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Distribuidor=Distribuidor::where('id',$id)->first();
            $response=$Distribuidor;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distribuidor  $Distribuidor
     * @return \Illuminate\Http\Response
     */
    public function edit(Distribuidor $Distribuidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distribuidor  $Distribuidor
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
        $distribuidor = Distribuidor::find($id);
        $distribuidor->descripcion = $request->input('descripcion');


        //Actualizar videojuego
        if ($distribuidor->update()) {
            $response = 'Distribuidor actualizado!';
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
     * @param  \App\Models\Distribuidor  $Distribuidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distribuidor $Distribuidor)
    {
        //
    }
}
