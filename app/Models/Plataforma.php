<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    use HasFactory;
    //Unión con videojuegos_plataformas
    public function plataformas()
    {
        return $this->belongsToMany('App\Models\Videojuego')->withTimestamps();
    }
}
