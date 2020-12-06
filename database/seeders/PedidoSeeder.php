<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primer pedido
        $Pedido = new \App\Models\Pedido();
        $Pedido->fecha = '2020-10-20';
        $Pedido->direccion_entrega = 'San Roque, Grecia';
        $Pedido->subtotal = '25000';
        $Pedido->costo_envio = '1000';
        $Pedido->impuesto = '3380';
        $Pedido->total = '29380';
        $Pedido->cliente_id = '154674289';
        $Pedido->usuario_id = '2';
        $Pedido->repartidor_id = '128745632';
        $Pedido->tipo_entrega_id = '1';
        $Pedido->estado_pedido_id = '1';
        $Pedido->save();

         //Primer  detalle pedido
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '1';
        $PedidoDetalle->videojuego_id = '3423146643';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '25000';
        $PedidoDetalle->save();

        //Segundo pedido
        $Pedido = new \App\Models\Pedido();
        $Pedido->fecha = '2020-10-25';
        $Pedido->direccion_entrega = 'Grecia Centro, Grecia';
        $Pedido->subtotal = '61000';
        $Pedido->costo_envio = '0';
        $Pedido->impuesto = '7930';
        $Pedido->total = '68930';
        $Pedido->cliente_id = '291611289';
        $Pedido->usuario_id = '3';
        $Pedido->repartidor_id = null;
        $Pedido->tipo_entrega_id = '2';
        $Pedido->estado_pedido_id = '1';
        $Pedido->save();

         //Primer detalle pedido 2
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '2';
        $PedidoDetalle->videojuego_id = '3423146643';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '25000';
        $PedidoDetalle->save();

        //Segundo detalle pedido 2
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '2';
        $PedidoDetalle->videojuego_id = '3423146643';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '36000';
        $PedidoDetalle->save();


        //Tercer pedido
        $Pedido = new \App\Models\Pedido();
        $Pedido->fecha = '2020-10-27';
        $Pedido->direccion_entrega = 'Frente a UTN Central, Alajuela';
        $Pedido->subtotal = '10000';
        $Pedido->costo_envio = '1000';
        $Pedido->impuesto = '1430';
        $Pedido->total = '12430';
        $Pedido->cliente_id = '289742294';
        $Pedido->usuario_id = '3';
        $Pedido->repartidor_id = '127745632';
        $Pedido->tipo_entrega_id = '1';
        $Pedido->estado_pedido_id = '2';
        $Pedido->save();

         //Primer  detalle pedido 3
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '3';
        $PedidoDetalle->videojuego_id = '3423146643';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '10000';
        $PedidoDetalle->save();

        //Cuarto pedido
        $Pedido = new \App\Models\Pedido();
        $Pedido->fecha = '2020-10-28';
        $Pedido->direccion_entrega = 'Naranjo Frente plaza deportes, Naranjo';
        $Pedido->subtotal = '25000';
        $Pedido->costo_envio = '1000';
        $Pedido->impuesto = '3380';
        $Pedido->total = '29380';
        $Pedido->cliente_id = '488043056';
        $Pedido->usuario_id = '4';
        $Pedido->repartidor_id = '121246980';
        $Pedido->tipo_entrega_id = '1';
        $Pedido->estado_pedido_id = '3';
        $Pedido->save();

         //Primer detalle pedido 4
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '4';
        $PedidoDetalle->videojuego_id = '1805312949';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '25000';
        $PedidoDetalle->save();

        //Quinto pedido
        $Pedido = new \App\Models\Pedido();
        $Pedido->fecha = '2020-10-29';
        $Pedido->direccion_entrega = 'Naranjo Centro, Naranjo';
        $Pedido->subtotal = '36000';
        $Pedido->costo_envio = '1000';
        $Pedido->impuesto = '4810';
        $Pedido->total = '40810';
        $Pedido->cliente_id = '488043070';
        $Pedido->usuario_id = '2';
        $Pedido->repartidor_id = '128112386';
        $Pedido->tipo_entrega_id = '1';
        $Pedido->estado_pedido_id = '3';
        $Pedido->save();

         //Primer  detalle pedido 5
        $PedidoDetalle = new \App\Models\Pedido_Videojuego();
        $PedidoDetalle->pedido_id = '5';
        $PedidoDetalle->videojuego_id = '6667311649';
        $PedidoDetalle->cantidad = '1';
        $PedidoDetalle->total = '36000';
        $PedidoDetalle->save();
    }
}
