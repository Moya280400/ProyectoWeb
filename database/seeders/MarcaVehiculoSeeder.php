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
        //1 Honda
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Honda';
        $MarcaVehiculo->save();
        //2 Toyota
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Toyota';
        $MarcaVehiculo->save();

        //3 Kawasaki
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion = 'Kawasaki';
        $MarcaVehiculo->save();

        //4 Suzuki
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Suzuki';
        $MarcaVehiculo->save();

        //5 Nissan
        $MarcaVehiculo = new \App\Models\Marca_vehiculo();
        $MarcaVehiculo->descripcion='Nissan';
        $MarcaVehiculo->save();
    }
}
