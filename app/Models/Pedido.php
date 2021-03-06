<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    //Unión con pedido_cliente
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
    //Unión con pedido_pedido_videojuegos
    public function pedido_Videojuegos()
    {
        return $this->hasMany('App\Models\Pedido_Videojuego');
    }
    //Unión con pedido_tipo_Entrega
    public function tipo_entrega()
    {
        return $this->belongsTo('App\Models\Tipo_Entrega');
    }
    public function estado_pedido()
    {
        return $this->belongsTo('App\Models\Estado_Pedido');
    }
    //Unión con pedido_repartidor
    public function repartidor()
    {
        return $this->belongsTo('App\Models\Repartidor');
    }
    //Unión con pedido_factura
    public function factura()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
    //Unión con pedido_Usuario
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }

    //Unión con pedido_facUsuario
}
