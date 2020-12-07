<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factura 1
        $factura = new \App\Models\Factura();
        $factura->fecha_emision='2020-10-30';
        $factura->subtotal='36000';
        $factura->impuesto='4810';
        $factura->total='40810';
        $factura->pedido_id='5';
        $factura->usuario_id='2';
        $factura->save();


        //Factura 2
        $factura = new \App\Models\Factura();
        $factura->fecha_emision='2020-10-29';
        $factura->subtotal='25000';
        $factura->impuesto='3380';
        $factura->total='29380';
        $factura->pedido_id='4';
        $factura->usuario_id='4';
        $factura->save();

         //Factura 3
         $factura = new \App\Models\Factura();
         $factura->fecha_emision='2020-10-28';
         $factura->subtotal='10000';
         $factura->impuesto='1000';
         $factura->total='12430';
         $factura->pedido_id='3';
         $factura->usuario_id='3';
         $factura->save();


    }
}
