<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;
    //Unión con videojuego_distribuidor
    public function distribuidor()
    {
        return $this->belongsTo('App\Models\Distribuidor');
    }
    //Unión con videojuego_desarrollador
    public function desarrollador()
    {
        return $this->belongsTo('App\Models\Desarrollador');
    }
    //Unión con videojuego_generos
    public function generos()
    {
        return $this->belongsToMany('App\Models\Genero')->withTimestamps();
    }
    //Unión con videojuego_plataformas
    public function plataformas()
    {
        return $this->belongsToMany('App\Models\Plataforma')->withTimestamps();
    }

    public function imagenes_videojuego()
    {
        return $this->hasMany('App\Models\Imagen_Videojuego');
    }
    //Unión con videojuego_pedido_videojuegos
    public function pedido_Videojuegos()
    {
        return $this->hasMany('App\Models\Pedido_Videojuego');
    }

}





