<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    //Unión con vehiculo_repartidor
    public function repartidor()
    {
        return $this->belongsTo('App\Models\Repartidor');
    }
    //Unión con vehiculo_tipoVehiculo
    public function tipoVehiculo()
    {
        return $this->belongsTo('App\Models\Tipo_Vehiculo');
    }
   //Unión con vehiculo_marcaVehiculo
    public function marcaVehiculo()
    {
        return $this->belongsTo('App\Models\Marca_Vehiculo');
    }
}
