<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Administrador
                $Rol = new \App\Models\Rol();
                $Rol->descripcion='Administrador';
                $Rol->save();
                //Vendedor
                $Rol = new \App\Models\Rol();
                $Rol->descripcion='Vendedor';
                $Rol->save();
                //Facturador
                $Rol = new \App\Models\Rol();
                $Rol->descripcion='Facturador';
                $Rol->save();
    }
}
