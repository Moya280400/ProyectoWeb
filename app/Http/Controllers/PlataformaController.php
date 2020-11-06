<?php

namespace App\Http\Controllers;

use App\Models\Plataforma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Plataforma=Plataforma::all();
            $response=$Plataforma;
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
            'pathIcono' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $plataforma = new Plataforma();
            $plataforma->descripcion = $request->input('descripcion');
            $plataforma->pathIcono = $request->input('pathIcono');

            //Guardar el videojuego en la BD
            if ($plataforma->save()) {
                $response = 'Plataforma creada!';
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
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Plataforma=Plataforma::where('id',$id)->first();
            $response=$Plataforma;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function edit(plataforma $plataforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
            'pathIcono' => 'required|string|max:255',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del videojuego
        $plataforma = Plataforma::find($id);
        $plataforma->descripcion = $request->input('descripcion');
        $plataforma->pathIcono = $request->input('pathIcono');


        //Actualizar videojuego
        if ($plataforma->update()) {
            $response = 'Plataforma actualizada!';
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
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(plataforma $plataforma)
    {
        //
    }
}
