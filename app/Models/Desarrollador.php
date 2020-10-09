<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarrollador extends Model
{
    use HasFactory;
    //Unión con desarrollador_videojuegos
    public function videojuegos()
    {
        return $this->hasMany('App\Models\Videojuego');
    }
}
