<?php

namespace App\Http\Controllers;

use App\Models\Desarrollador;
use Illuminate\Http\Request;

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
        //
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
    public function update(Request $request, Desarrollador $Desarrollador)
    {
        //
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
