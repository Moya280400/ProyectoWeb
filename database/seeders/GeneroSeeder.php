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
        $Genero->pathIcono='https://i.ibb.co/wzH1Mwf/hiking.png';
        $Genero->save();

        //2 Disparos
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Disparos';
        $Genero->pathIcono = 'https://i.ibb.co/4pKNXsg/aggro.png';
        $Genero->save();

        //3 Estrategia
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Estrategia';
        $Genero->pathIcono = 'https://i.ibb.co/WK1g0Jm/strategy.png';
        $Genero->save();

        //4 Lucha
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Lucha';
        $Genero->pathIcono = 'https://i.ibb.co/QQJPBrk/boxing-gloves.png';
        $Genero->save();

        //5 Survival horror
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Survival horror';
        $Genero->pathIcono = 'https://i.ibb.co/SwcFzDd/zombie.png';
        $Genero->save();

        //6 Plataformas
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Plataformas';
        $Genero->pathIcono = 'https://i.ibb.co/qNNwXGV/ladder.png';
        $Genero->save();

        //7 Rol
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Rol';
        $Genero->pathIcono = 'https://i.ibb.co/NsjmdTB/board-games-with-roles.png';
        $Genero->save();

        //8 Simulación
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Simulación';
        $Genero->pathIcono = 'https://i.ibb.co/mRfYkXz/simulator.png';
        $Genero->save();

        //9 Deportivo
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Deportivo';
        $Genero->pathIcono = 'https://i.ibb.co/Qvmrk9J/football.png';
        $Genero->save();

        //10 No lineal
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'No lineal';
        $Genero->pathIcono = 'https://i.ibb.co/h9mbdqQ/adventures.png';
        $Genero->save();

        //11 ARPG Acción-Aventura
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'ARPG Acción-Aventura';
        $Genero->pathIcono = 'https://i.ibb.co/SdndzDm/rpg-game.png';
        $Genero->save();

        //12 Un jugador
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Un jugador';
        $Genero->pathIcono = 'https://i.ibb.co/VSKZWB7/one-player-game-symbol.png';
        $Genero->save();

        //13 Multijugador
        $Genero = new \App\Models\Genero();
        $Genero->descripcion = 'Multijugador';
        $Genero->pathIcono = 'https://i.ibb.co/4WD3n6S/two-players-game-interface-symbol.png';
        $Genero->save();

    }
}
