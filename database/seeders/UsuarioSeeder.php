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
        //Admin 1
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Steve Rogers',
            'email' => 'admin@gmail.com',
            'telefono' => '86092012',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 1
        ]);
        $objetoUsuario->save();

        //Vendedor 2
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Peter Parker',
            'email' => 'vendedor@gmail.com',
            'telefono' => '86675665',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 2
        ]);
        $objetoUsuario->save();

        //Vendedor 3
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Bruce Wayne',
            'email' => 'imbatman@gmail.com',
            'telefono' => '86093572',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 2
        ]);
        $objetoUsuario->save();

        //Vendedor 4
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Clark Kent',
            'email' => 'clarkkent@gmail.com',
            'telefono' => '87788909',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 2
        ]);
        $objetoUsuario->save();

        //Vendedor 5
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Nick Fury ',
            'email' => 'nickfury@gmail.com',
            'telefono' => '85433765',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 2
        ]);
        $objetoUsuario->save();

        //Bodeguero
        $objetoUsuario = \App\Models\Usuario::create([
            'nombre' => 'Victor Volkov',
            'email' => 'bodeguero@gmail.com',
            'telefono' => '85433765',
            'estado' => '1',
            'password' => bcrypt('123456789'),
            'rol_id' => 3
        ]);
        $objetoUsuario->save();

    }
}
