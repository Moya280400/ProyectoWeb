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
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Steve Rogers',
            'email' => 'admin@gmail.com',
            'telefono' => '86092012',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 1
        ]);
        $objetoUsuario->save();
        //Admin
    }
}
