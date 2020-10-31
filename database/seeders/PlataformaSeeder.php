<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 PlayStation
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //2 PlayStation 1
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 1';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //3 PlayStation 2
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 2';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //4 PlayStation 3
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 3';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //5 PlayStation 4
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 4';
        $Plataforma->pathIcono = 'https://i.ibb.co/5hzWg4B/ps4-game-console.png';
        $Plataforma->save();

        //6 PlayStation 5
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 5';
        $Plataforma->pathIcono = 'https://i.ibb.co/Z8GDGBg/ps5.png';
        $Plataforma->save();

        //7 Xbox
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //8 Xbox 360
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox 360';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //9 Xbox One
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox One';
        $Plataforma->pathIcono = 'https://i.ibb.co/gdfN8rj/xbox-one-games-console.png';
        $Plataforma->save();

        //10 Xbox Series X|S
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox Series X|S';
        $Plataforma->pathIcono = 'https://i.ibb.co/Bjhb27t/x-box-series-x-512.png';
        $Plataforma->save();

        //11 Nintendo Wii U
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Wii U';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //12 Nintendo Switch
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Switch';
        $Plataforma->pathIcono = 'https://i.ibb.co/kM21SBT/noun-nintendo-switch-694755.png';
        $Plataforma->save();

        //13 PC
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PC';
        $Plataforma->pathIcono = 'https://i.ibb.co/3BnG0wL/monitor-keyboard-and-mouse.png';
        $Plataforma->save();
    }
}
