<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    //Unión con rol_usuarios
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario');
    }
}
