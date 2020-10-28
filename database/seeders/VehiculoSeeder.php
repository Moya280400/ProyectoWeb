<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1° vehiculo
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='ABC1234';
        $MarcaVehiculo->modelo='J125 SE ABS';
        $MarcaVehiculo->marca_id=3;
        $MarcaVehiculo->tipo_vehiculo_id=2;
        $MarcaVehiculo->save();

        //2° vehiculo
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='ABC1235';
        $MarcaVehiculo->modelo='J125 SE ABS';
        $MarcaVehiculo->marca_id=3;
        $MarcaVehiculo->tipo_vehiculo_id=2;
        $MarcaVehiculo->save();

        //3° vehiculo
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='FGB1236';
        $MarcaVehiculo->modelo='J125 SE ABS';
        $MarcaVehiculo->marca_id=3;
        $MarcaVehiculo->tipo_vehiculo_id=2;
        $MarcaVehiculo->save();

        //4° vehiculo
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='ZPO1237';
        $MarcaVehiculo->modelo='Odyssey';
        $MarcaVehiculo->marca_id=1;
        $MarcaVehiculo->tipo_vehiculo_id=1;
        $MarcaVehiculo->save();

        //5° vehiculo
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='RGB1233';
        $MarcaVehiculo->modelo='Corolla';
        $MarcaVehiculo->marca_id=2;
        $MarcaVehiculo->tipo_vehiculo_id=1;
        $MarcaVehiculo->save();
    }
}
