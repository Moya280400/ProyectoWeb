<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Jorge Piedras Muñoz
        $Cliente = new \App\Models\Cliente();
        $Cliente->id = '154674289';
        $Cliente->nombre = 'Jorge Piedra Muñoz';
        $Cliente->correo = 'jpiedram@gmail.com';
        $Cliente->telefono = '86544523';
        $Cliente->direccion = 'San Roque, Grecia';
        $Cliente->estado = '1';
        $Cliente->save();

        //Oscar Morales Nuñez
        $Cliente = new \App\Models\Cliente();
        $Cliente->id = '291611289';
        $Cliente->nombre = 'Oscar Morales Nuñez';
        $Cliente->correo =
        'omoralesn@gmail.com';
        $Cliente->telefono = '89062070';
        $Cliente->direccion = 'Grecia Centro, Grecia';
        $Cliente->estado = '1';
        $Cliente->save();

        //Cristian Barrantes Espinoza
        $Cliente = new \App\Models\Cliente();
        $Cliente->id = '289742294';
        $Cliente->nombre = 'Cristian Barrantes Espinoza';
        $Cliente->correo = 'cristianbarraes@gmail.com';
        $Cliente->telefono = '85452312';
        $Cliente->direccion = 'Frente a UTN Central, Alajuela';
        $Cliente->estado = '1';
        $Cliente->save();

        //Pedro Albert Chaves
        $Cliente = new \App\Models\Cliente();
        $Cliente->id = '488043056';
        $Cliente->nombre = 'Pedro Albert Chaves';
        $Cliente->correo = 'pedrsacha@gmail.com';
        $Cliente->telefono = '85544334';
        $Cliente->direccion = 'Naranjo Frente plaza deportes, Naranjo';
        $Cliente->estado = '1';
        $Cliente->save();

        //Emma Ana Chacón
        $Cliente = new \App\Models\Cliente();
        $Cliente->id = '488043070';
        $Cliente->nombre = 'Emma Ana Chacón';
        $Cliente->correo = 'emmaanana@gmail.com';
        $Cliente->telefono = '89955678';
        $Cliente->direccion = 'Naranjo Centro, Naranjo';
        $Cliente->estado = '1';
        $Cliente->save();
    }
}
