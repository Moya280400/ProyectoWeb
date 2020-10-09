<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    use HasFactory;

    //Unión con vehiculo_repartidor
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo');
    }
    //Unión con vehiculo_pedidos
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
