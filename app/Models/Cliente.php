<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //Unión con cliente_pedidos
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
