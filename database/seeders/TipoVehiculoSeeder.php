<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Moto
        $TipoVehiculo = new \App\Models\Tipo_vehiculo();
        $TipoVehiculo->descripcion='Motocicleta';
        $TipoVehiculo->save();

        //Carro
        $TipoVehiculo = new \App\Models\Tipo_vehiculo();
        $TipoVehiculo->descripcion='Automovil';
        $TipoVehiculo->save();
    }
}
