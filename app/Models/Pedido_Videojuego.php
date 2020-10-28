<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_Videojuego extends Model
{
    use HasFactory;
     //Unión con pedido_videojuego_pedido
    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
    //Unión con pedido_videojuego_videojuego
    public function videojuego()
    {
        return $this->belongsTo('App\Models\Videojuego');
    }

    protected $table = 'pedido_videojuego';
}
