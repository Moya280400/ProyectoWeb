<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $Cliente = Cliente::all();
            $response = $Cliente;
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
    public function create(Request $request)
    {
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
            'direccion' => 'required|string|max:500',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            $cliente = new Cliente();
            $cliente->id = $request->input('id');
            $cliente->nombre = $request->input('nombre');
            $cliente->correo = $request->input('correo');
            $cliente->telefono = $request->input('telefono');
            $cliente->direccion = $request->input('direccion');

            //Guardar el videojuego en la BD
            if ($cliente->save()) {
                $response = 'Cliente creado!';
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
     * @param  \App\Models\cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Cliente = Cliente::where('id', $id)->first();
            $response = $Cliente;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $Cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|min:5',
            'correo' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:8',
            'direccion' => 'required|string|max:500',
        ]);
        //Retornar mensajes de validación
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        //Datos del videojuego
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->correo = $request->input('correo');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->estado = $request->input('estado');


        //Actualizar videojuego
        if ($cliente->update()) {
            $response = 'Cliente actualizado!';
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
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $Cliente)
    {
        //
    }
}
