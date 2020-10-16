<?php

namespace App\Http\Controllers;

use App\Models\Marca_Vehiculo;
use Illuminate\Http\Request;

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
        //
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
    public function update(Request $request, marca_vehiculo $marca_vehiculo)
    {
        //
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
