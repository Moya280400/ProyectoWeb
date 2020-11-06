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
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el videojuego
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'nombre' => 'required|min:3',
                'descripcion' => 'required|min:5',
                'fechaEstrenoInicial' => 'required|date',
                'precio' => 'required|numeric'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $vj = new Videojuego();
            $vj->nombre = $request->input('nombre');
            $vj->descripcion = $request->input('descripcion');
            $vj->precio = $request->input('precio');
            $vj->fechaEstrenoInicial
                = Carbon::parse($request->input('fechaEstrenoInicial'))->format('Y-m-d');
            /*
        Asociar con un usuario
        Relación de uno a muchos
        https://laravel.com/docs/8.x/eloquent-relationships#updating-belongs-to-relationships
        Existen dos opciones para realizar la asociación
            $vj->user()->associate($user->id);
             $vj->user_id=$user->id;
        */
            $user = auth('api')->user();
            $vj->user()->associate($user->id);
            //Información de la imagen
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $nombreImagen = time() . "foto." . $file->getClientOriginalExtension();
                $imageUpload = Image::make($file->getRealPath());
                $path = 'images/';
                $imageUpload->save(public_path($path) . $nombreImagen);
                $vj->nombreImagen = $nombreImagen;
                $vj->pathImagen = url($path) . "/" . $nombreImagen;
            }
            //Guardar el videojuego en la BD
            if ($vj->save()) {
                /*
            Asociarle varias generos
            Relación de muchos a muchos
            https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
            */
                //Solo es necesario con la imagen
                $generos = $request->input('genero_id');
                if (!is_array($request->input('genero_id'))) {
                    $generos =
                        explode(',', $request->input('genero_id'));
                }
                if (!is_array($request->input('genero_id'))) {
                    $generos =
                        explode(',', $request->input('genero_id'));
                }
                if (!is_null($request->input('genero_id'))) {

                    $vj->generos()->attach($generos);
                }
                $response = 'Videojuego creado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
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

    public function show($id)
    {
        try {
            $Videojuego=Videojuego::where('id',$id)->with(['plataformas', 'generos','distribuidor','desarrollador','imagenes_videojuego'])->first();
            $response=$Videojuego;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
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
