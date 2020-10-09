<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca_vehiculo extends Model
{
    use HasFactory;
     //Unión con marca_vehiculo_vehiculos
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo');
    }
}
