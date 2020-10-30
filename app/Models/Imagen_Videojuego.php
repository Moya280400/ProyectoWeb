<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen_Videojuego extends Model
{
    use HasFactory;

    public function videojuegos()
    {
        return $this->belongsTo('App\Models\Videojuego');
    }

    protected $table = 'imagen_videojuegos';
}
