<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    //Unión con usuario_rol
    public function rol()
    {
        return $this->belongsTo('App\Models\Rol');
    }
    ///Unión con usuario_facturas
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }
}
