<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistribuidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //1 EA
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Electronic Arts';
        $Distribuidor->save();

        //2 Valve
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Valve';
        $Distribuidor->save();

        //3 Rockstar Games
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Rockstar Games';
        $Distribuidor->save();

        //4 Sony Interactive Entertainment
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Sony Interactive Entertainment';
        $Distribuidor->save();

        //5 Xbox Game Studios
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Xbox Game Studios';
        $Distribuidor->save();

        //6 Nintendo
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Nintendo';
        $Distribuidor->save();

        //7 Ubisoft
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Ubisoft';
        $Distribuidor->save();

        //8 Rockstar Games
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Rockstar Games';
        $Distribuidor->save();

        //9 Warner Bros. Interactive Entertainment
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Warner Bros. Interactive Entertainment';
        $Distribuidor->save();

        //10 CD Projekt RED
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'CD Projekt Red';
        $Distribuidor->save();

        //11 Bethesda Softworks
        $Distribuidor = new \App\Models\Distribuidor();
        $Distribuidor->descripcion = 'Bethesda Softworks';
        $Distribuidor->save();
    }
}
