<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Genero=Genero::all();
            $response=$Genero;
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
            'pathIcono' => 'required|string|url|max:700'
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $genero = new Genero();
            $genero->descripcion = $request->input('descripcion');
            $genero->pathIcono = $request->input('pathIcono');

            //Guardar marca vehiculo en la BD
            if ($genero->save()) {
                $response = 'Genero creado!';
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
     * @param  \App\Models\Genero  $Genero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Genero=Genero::where('id',$id)->first();
            $response=$Genero;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $Genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $Genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $Genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
            'pathIcono' => 'required|string|url|max:700'
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del genero
        $genero = Genero::find($id);
        $genero->descripcion = $request->input('descripcion');
        $genero->pathIcono = $request->input('pathIcono');

        //Actualizar videojuego
        if ($genero->update()) {
            $response = 'Genero actualizado!';
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
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(genero $genero)
    {
        //
    }
}
