<?php

namespace App\Http\Controllers;

use App\Models\Tipo_vehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Tipo_vehiculo=Tipo_vehiculo::all();
            $response=$Tipo_vehiculo;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Tipo_vehiculo=Tipo_vehiculo::where('id',$id)->first();
            $response=$Tipo_vehiculo;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_vehiculo $tipo_vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_vehiculo $tipo_vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_vehiculo $tipo_vehiculo)
    {
        //
    }
}
