<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //Unión con cliente_pedidos

    protected $fillable = [
        'id', 'nombre', 'correo', 'telefono','direccion',
     ];


    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
