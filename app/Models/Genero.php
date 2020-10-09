<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    //Unión con genero_videojuegos
    public function videojuegos()
    {
        // withTimestamps() Mantenga automáticamente las marcas de tiempo created_at y updated_at
        return $this->belongsToMany('App\Models\Videojuego')->withTimestamps();
    }
}
