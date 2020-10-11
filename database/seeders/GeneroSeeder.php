<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 Aventura
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Aventura';
        $Genero->save();

        //2 Disparos
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Disparos';
        $Genero->save();

        //3 Estrategia
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Estrategia';
        $Genero->save();

        //4 Lucha
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Lucha';
        $Genero->save();

        //5 Survival horror
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Survival horror';
        $Genero->save();

        //6 Plataformas
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Plataformas';
        $Genero->save();

        //7 Rol
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Rol';
        $Genero->save();

        //8 Simulación
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Simulación';
        $Genero->save();

        //9 Deportivo
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Deportivo';
        $Genero->save();

        //10 No lineal
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'No lineal';
        $Genero->save();

        //11 ARPG Acción-Aventura
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'ARPG Acción-Aventura';
        $Genero->save();

        //12 Un jugador
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Un jugador';
        $Genero->save();

        //12 Multijugador
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Multijugador';
        $Genero->save();

    }
}
