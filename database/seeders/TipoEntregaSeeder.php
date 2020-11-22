<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Envio
        $Envio = new \App\Models\Tipo_entrega();
        $Envio->descripcion = 'Envio';
        $Envio->precio = '2500';
        $Envio->save();

        //En local
        $Envio = new \App\Models\Tipo_entrega();
        $Envio->descripcion = 'Local';
        $Envio->precio = '0';
        $Envio->save();
    }
}
