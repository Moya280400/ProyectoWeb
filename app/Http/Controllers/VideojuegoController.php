<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVideojuegoAdmin()
    {
        try {
            $videojuegos=Videojuego::orderBy('nombre', 'asc')->with(['generos', 'plataformas'])->get();
            $response=$videojuegos;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }

    }

    public function getVideojuegoActivo()
    {
        try {
            $videojuegos=Videojuego::where('estado', 1)->with(['generos', 'plataformas'])->orderBy('nombre', 'asc')->get();
            $response=$videojuegos;
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
     * Busca el videojuego por nombre.
     *
     * @param  \App\Models\videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function getJuegoPorNombre($nombre)
    {
        //where('name', 'like', 'T%')
        //'%' . Input::get('name') . '%'
        try {
            //Obtener un videojuego
            $videojuegos = Videojuego::where('nombre', 'like', '%' . $nombre . '%')->with(['plataformas', 'generos'])->get();
            $response = $videojuegos;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function edit(videojuego $videojuego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videojuego $videojuego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function destroy(videojuego $videojuego)
    {
        //
    }
}
