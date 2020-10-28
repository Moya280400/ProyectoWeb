<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepartidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primer repartidor
        $Repartidor = new \App\Models\Repartidor();
        $Repartidor->id = '128745632';
        $Repartidor->nombre = 'Raul Alvarez';
        $Repartidor->correo = 'raulalvare@gmail.com';
        $Repartidor->telefono = '86092015';
        $Repartidor->vehiculo_id = 'ABC1234';
        $Repartidor->estado = 1;
        $Repartidor->save();

        //Sec repartidor
        $Repartidor = new \App\Models\Repartidor();
        $Repartidor->id = '128850777';
        $Repartidor->nombre = 'Samuel De Luque';
        $Repartidor->correo = 'samuledeluque@gmail.com';
        $Repartidor->telefono = '86102020';
        $Repartidor->vehiculo_id = 'FGB1236';
        $Repartidor->estado = 0;
        $Repartidor->save();

        //Terc repartidor
        $Repartidor = new \App\Models\Repartidor();
        $Repartidor->id = '127745632';
        $Repartidor->nombre = 'Renato Rodriguez';
        $Repartidor->correo = 'reborn@gmail.com';
        $Repartidor->telefono = '81292015';
        $Repartidor->vehiculo_id = 'ZPO1237';
        $Repartidor->estado = 1;
        $Repartidor->save();

        //Cuarto repartidor
        $Repartidor = new \App\Models\Repartidor();
        $Repartidor->id = '121246980';
        $Repartidor->nombre = 'Leonidas Muñoz';
        $Repartidor->correo = 'LeoM@gmail.com';
        $Repartidor->telefono = '88126555';
        $Repartidor->vehiculo_id = 'RGB1233';
        $Repartidor->estado = 1;
        $Repartidor->save();

        //Quinto repartidor
        $Repartidor = new \App\Models\Repartidor();
        $Repartidor->id = '128112386';
        $Repartidor->nombre = 'Gustavo Garcia';
        $Repartidor->correo = 'gusgarcia@gmail.com';
        $Repartidor->telefono = '89095219';
        $Repartidor->vehiculo_id = 'ABC1235';
        $Repartidor->estado = 1;
        $Repartidor->save();
    }
}
