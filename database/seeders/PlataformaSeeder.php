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
        $Plataforma->save();

        //2 PlayStation 1
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 1';
        $Plataforma->save();

        //3 PlayStation 2
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 2';
        $Plataforma->save();

        //4 PlayStation 3
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 3';
        $Plataforma->save();

        //5 PlayStation 4
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 4';
        $Plataforma->save();

        //6 PlayStation 5
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PlayStation 5';
        $Plataforma->save();

        //7 Xbox
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox';
        $Plataforma->save();

        //8 Xbox 360
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox 360';
        $Plataforma->save();

        //9 Xbox One
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox One';
        $Plataforma->save();

        //10 Xbox Series X|S
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Xbox Series X|S';
        $Plataforma->save();

        //11 Nintendo Wii U
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Wii U';
        $Plataforma->save();

        //12 Nintendo Switch
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'Nintendo Switch';
        $Plataforma->save();

        //13 PC
        $Plataforma = new \App\Models\Plataforma();
        $Plataforma->descripcion = 'PC';
        $Plataforma->save();
    }
}
