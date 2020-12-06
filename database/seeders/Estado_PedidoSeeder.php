<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Estado_PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Preparando
         $Estado = new \App\Models\Estado_Pedido();
         $Estado->descripcion = 'Pendiente';
         $Estado->save();

         //Preparado
         $Estado = new \App\Models\Estado_Pedido();
         $Estado->descripcion = 'Preparado';
         $Estado->save();

         //En camino
         $Estado = new \App\Models\Estado_Pedido();
         $Estado->descripcion = 'Entregado';
         $Estado->save();
    }
}
