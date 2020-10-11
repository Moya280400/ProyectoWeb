<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $Usuario= new \App\Models\Usuario();
        $Usuario->id = '123456789';
        $Usuario->nombre = 'Steve Rogers';
        $Usuario->correo = 'admin@gmail.com';
        $Usuario->telefono = '86092012';
        $Usuario->estado = 1;
        $Usuario->contrasenna = '123456789';
        $Usuario->rol_id = 1;
        $Usuario->save();
    }
}
