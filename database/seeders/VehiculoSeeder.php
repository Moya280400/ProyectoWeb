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
        $MarcaVehiculo = new \App\Models\Vehiculo();
        $MarcaVehiculo->id='ABC1234';
        $MarcaVehiculo->modelo='Modelo';
        $MarcaVehiculo->marca_id=1;
        $MarcaVehiculo->tipo_vehiculo_id=1;
        $MarcaVehiculo->save();
    }
}
