<?php

namespace App\Http\Controllers;

use App\Models\Distribuidor;
use Illuminate\Http\Request;

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
        //
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
    public function update(Request $request, Distribuidor $Distribuidor)
    {
        //
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
