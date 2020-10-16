<?php

namespace App\Http\Controllers;

use App\Models\Repartidor;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Repartidor=Repartidor::all();
            $response=$Repartidor;
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
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Repartidor=Repartidor::where('id',$id)->first();
            $response=$Repartidor;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function edit(repartidor $repartidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, repartidor $repartidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repartidor  $repartidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(repartidor $repartidor)
    {
        //
    }
}
