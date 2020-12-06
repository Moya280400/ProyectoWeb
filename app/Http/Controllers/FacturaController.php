<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Factura = Factura::all();
            $response = $Factura;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $Factura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //as
            $Factura = Factura::where('id', $id)->with(['pedido.pedido_Videojuegos', 'pedido.cliente','pedido.repartidor'])->first();
            $response = $Factura;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $Factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $Factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $Factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $Factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $Factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $Factura)
    {
        //
    }
}
