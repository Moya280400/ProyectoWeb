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
        //1 Gamecube
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Gamecube';
        $Plataforma->pathIcono = null;
        $Plataforma->save();

        //2 PlayStation
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation';
        $Plataforma->pathIcono = 'https://i.ibb.co/TwpLQ0G/classic-console-1-1.jpg';
        $Plataforma->save();

        //3 PlayStation 2
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 2';
        $Plataforma->pathIcono = 'https://i.ibb.co/f8LzgPx/c021c573a9787c496f7f44d663e89bdb.jpg';
        $Plataforma->save();

        //4 PlayStation 3
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 3';
        $Plataforma->pathIcono = 'https://i.ibb.co/0tRzwbw/9fae7ed3be19f7bc069488830e9b96be.jpg';
        $Plataforma->save();

        //5 PlayStation 4
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 4';
        $Plataforma->pathIcono = 'https://i.ibb.co/nkTmcSC/ps4-slimm500-gb-3.png';
        $Plataforma->save();

        //6 PlayStation 5
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 5';
        $Plataforma->pathIcono = 'https://i.ibb.co/GpLd8Dh/ezgif-com-gif-maker.png';
        $Plataforma->save();

        //7 Xbox
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox';
        $Plataforma->pathIcono = 'https://i.ibb.co/kQNXt21/microsoft-xbox-1024x1024.png';
        $Plataforma->save();

        //8 Xbox 360
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox 360';
        $Plataforma->pathIcono = 'https://i.ibb.co/drRRZ1Y/61yx3u-Rbbn-L-SL1000-600x600.jpg';
        $Plataforma->save();

        //9 Xbox One
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox One';
        $Plataforma->pathIcono = 'https://i.ibb.co/6BmBJnz/xboxonex.png';
        $Plataforma->save();

        //10 Xbox Series X|S
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox Series X|S';
        $Plataforma->pathIcono = 'https://i.ibb.co/jRJB6TM/xboxseriesx.png';
        $Plataforma->save();

        //11 Nintendo Wii U
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Wii U';
        $Plataforma->pathIcono = 'https://i.ibb.co/3Srpxn3/1526480760-84.jpg';
        $Plataforma->save();

        //12 Nintendo Switch
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Switch';
        $Plataforma->pathIcono = 'https://i.ibb.co/Wzb0rBR/switch-Neon.jpg';
        $Plataforma->save();

        //13 PC
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PC';
        $Plataforma->pathIcono = 'https://i.ibb.co/dbthwMH/pcgamer.png';
        $Plataforma->save();
    }
}
