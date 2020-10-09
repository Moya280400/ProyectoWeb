<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_entrega extends Model
{
    use HasFactory;
    //Unión con TipoEntregas_pedido
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
