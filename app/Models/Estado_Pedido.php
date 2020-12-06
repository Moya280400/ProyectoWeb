<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_Pedido extends Model
{
    use HasFactory;
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }

    protected $table = 'estado_pedidos';
}
