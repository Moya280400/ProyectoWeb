<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_vehiculo extends Model
{
    use HasFactory;
    //Unión con tipo_vehiculo_vehiculos
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo');
    }
}
