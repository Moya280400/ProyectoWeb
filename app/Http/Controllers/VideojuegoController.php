<?php

namespace App\Http\Controllers;

use App\Models\Imagen_Videojuego;
use App\Models\Plataforma;
use App\Models\Videojuego;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            $videojuegos = Videojuego::orderBy('nombre', 'asc')->with(['generos', 'plataformas'])->get();
            $response = $videojuegos;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    public function getVideojuegoActivo()
    {
        try {
            $videojuegos = Videojuego::where('estado', 1)->with(['generos', 'plataformas'])->orderBy('fechaSalida', 'desc')->get();
            $response = $videojuegos;
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
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el videojuego
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'id' => 'required|min:5',
                'nombre' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'fechaSalida' => 'required|date',
                'precio' => 'required|numeric',
                'pathCover' => 'required|string|url|max:700',
                'pathVideo' => 'required|string|url|max:700',
                'desarrollador_id' => 'required|string',
                'distribuidor_id' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $vj = new Videojuego();
            $vj->id = $request->input('id');
            $vj->nombre = $request->input('nombre');
            $vj->descripcion = $request->input('descripcion');
            $vj->fechaSalida = Carbon::parse($request->input('fechaSalida'))->format('Y-m-d');
            $vj->precio = $request->input('precio');
            $vj->pathCover = $request->input('pathCover');
            $vj->pathVideo = $request->input('pathVideo');

            $vj->desarrollador_id = $request->input('desarrollador_id');
            $vj->distribuidor_id = $request->input('distribuidor_id');
            //Guardar el videojuego en la BD


            $date = Carbon::parse($request->input('fechaSalida'));
            $now = Carbon::now();
            if ($date > $now) {
                $vj->estado = 0;
            } else {
                $vj->estado = 1;
            }

            if ($vj->save()) {
                /*
            Asociarle varias generos
            Relación de muchos a muchos
            https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
            */
                //Generos
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

                //Plataformas
                $plataformas = $request->input('plataforma_id');
                if (!is_array($request->input('plataforma_id'))) {
                    $plataformas =
                        explode(',', $request->input('plataforma_id'));
                }
                if (!is_array($request->input('plataforma_id'))) {
                    $plataformas =
                        explode(',', $request->input('plataforma_id'));
                }
                if (!is_null($request->input('plataforma_id'))) {

                    $vj->plataformas()->attach($plataformas);
                }

                //Imagenes
                $images = $request->input('imagenes');
                if (!is_array($request->input('imagenes'))) {
                    $images =
                        explode(',', $request->input('imagenes'));
                }
                if (!is_array($request->input('imagenes'))) {
                    $images =
                        explode(',', $request->input('imagenes'));
                }
                if (!is_null($request->input('imagenes'))) {

                    foreach ($images as $image) {
                        $Imagen = new Imagen_Videojuego();
                        $Imagen->videojuego_id = $vj->id;

                        $Imagen->pathImagen = $image;
                        $Imagen->save();
                    }
                }

                $response = 'Videojuego creado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }

            //$Imagenes = new Imagen_Videojuego();


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
            $Videojuego = Videojuego::where('id', $id)->with(['plataformas', 'generos', 'distribuidor', 'desarrollador', 'imagenes_videojuego'])->first();
            $response = $Videojuego;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }

    public function filtradoGenero(Request $request)
    {
        try {
            $generos = $request->input('filtro_id');
            if (!is_array($request->input('filtro_id'))) {
                $generos  =
                    explode(',', $request->input('filtro_id'));
            }
            if (!is_array($request->input('filtro_id'))) {
                $generos  =
                    explode(',', $request->input('filtro_id'));
            }
            if (!is_null($request->input('filtro_id'))) {

            //Listar los videojuegos
            $videojuegos = Videojuego::whereHas('generos', function ($query) use ($generos) {
                $query->whereIn('genero_id', [$generos]);
            })->get();
            $response = $videojuegos;
                return response()->json($response, 200);
            }

        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    public function filtradoPlataforma(Request $request)
    {
        try {
            $plataformas = $request->input('filtro_id');
            if (!is_array($request->input('filtro_id'))) {
                $plataformas =
                    explode(',', $request->input('filtro_id'));
            }
            if (!is_array($request->input('filtro_id'))) {
                $plataformas =
                    explode(',', $request->input('filtro_id'));
            }
            if (!is_null($request->input('filtro_id'))) {

                $videojuegos = Videojuego::whereHas('plataformas', function ($query) use ($plataformas) {
                    $query->whereIn('plataforma_id', [$plataformas]);
                })->get();
                $response = $videojuegos;
                return response()->json($response, 200);
            }
            //Listar los videojuegos
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
    public function update(Request $request, $id)
    {
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el videojuego
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'nombre' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'fechaSalida' => 'required|date',
                'precio' => 'required|numeric',
                'pathCover' => 'required|string|url|max:700',
                'pathVideo' => 'required|string|url|max:700',
                'desarrollador_id' => 'required|string',
                'distribuidor_id' => 'required|string'
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $vj = Videojuego::where('id',$id)->first();
            $vj->nombre = $request->input('nombre');
            $vj->descripcion = $request->input('descripcion');
            $vj->fechaSalida = Carbon::parse($request->input('fechaSalida'))->format('Y-m-d');
            $vj->precio = $request->input('precio');
            $vj->pathCover = $request->input('pathCover');
            $vj->pathVideo = $request->input('pathVideo');
            $vj->estado = $request->input('estado');
            $vj->desarrollador_id = $request->input('desarrollador_id');
            $vj->distribuidor_id = $request->input('distribuidor_id');
            //Guardar el videojuego en la BD


            if ($vj->update()) {
                /*
            Asociarle varias generos
            Relación de muchos a muchos
            https://laravel.com/docs/8.x/eloquent-relationships#inserting-and-updating-related-models
            */

                //Sincronice generos
                //Array de generos
                $generos = $request->input('genero_id');
                //Solo es necesario con la imagen
                if (!is_array($request->input('genero_id'))) {
                    //Formato array relación muchos a muchos
                    $generos =
                        explode(',', $request->input('genero_id'));
                }
                if (!is_array($request->input('genero_id'))) {
                    //Formato array relación muchos a muchos
                    $generos =
                        explode(',', $request->input('genero_id'));
                }
                if (!is_null($request->input('genero_id'))) {
                    //Agregar generos
                    $vj->generos()->sync($generos);
                }
                $plataformas = $request->input('plataforma_id');
                //Solo es necesario con la imagen
                if (!is_array($request->input('plataforma_id'))) {
                    //Formato array relación muchos a muchos
                    $plataformas =
                        explode(',', $request->input('plataforma_id'));
                }

                if (!is_array($request->input('plataforma_id'))) {
                    //Formato array relación muchos a muchos
                    $plataformas =
                        explode(',', $request->input('plataforma_id'));
                }
                if (!is_null($request->input('plataforma_id'))) {
                    //Agregar generos
                    $vj->plataformas()->sync($plataformas);
                }
                //Imagenes

                Imagen_Videojuego::where('videojuego_id', '=', $vj->id)->delete();
                //Imagen_VideojuegoDB::delete('delete imagen_videojuegos where videojuego_id = ?', [$vj->id]);
                $images = $request->input('imagenes');
                if (!is_array($request->input('imagenes'))) {
                    $images =
                        explode(',', $request->input('imagenes'));
                }
                if (!is_array($request->input('imagenes'))) {
                    $images =
                        explode(',', $request->input('imagenes'));
                }
                if (!is_null($request->input('imagenes'))) {

                    foreach ($images as $image) {
                        $Imagen = new Imagen_Videojuego();
                        $Imagen->videojuego_id = $vj->id;

                        $Imagen->pathImagen = $image;
                        $Imagen->save();
                    }
                }

                $response = 'Videojuego actualizado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }

            //$Imagenes = new Imagen_Videojuego();


        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
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
