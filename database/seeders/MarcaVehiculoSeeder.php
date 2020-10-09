<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Chevrolet
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Chevrolet';
        $MarcaVehiculo->save();
        //Land Rover
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Land Rover';
        $MarcaVehiculo->save();

        //Ferrari
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion = 'Ferrari';
        $MarcaVehiculo->save();
    }
}
