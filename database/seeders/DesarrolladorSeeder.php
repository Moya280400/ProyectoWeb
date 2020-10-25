<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesarrolladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1 Obsidian Entertainment
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Obsidian Entertainment';
        $Desarrollador->save();

        //2 Ubisoft
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Ubisoft';
        $Desarrollador->save();

        //3 Bethesda Softworks
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Bethesda Softworks';
        $Desarrollador->save();

        //4 CD Project Red
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'CD Project Red';
        $Desarrollador->save();

        //5 Santa Monica
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Santa Monica Studios';
        $Desarrollador->save();

        //6 Naughty Dog
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Naughty Dog';
        $Desarrollador->save();

        //7 Guerilla Games
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Guerilla Games';
        $Desarrollador->save();

        //8 Rockstedy
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Rockstedy';
        $Desarrollador->save();

        //9 Nintendo
        $Desarrollador->save();$Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Nintendo';
        $Desarrollador->save();

        //10 Mojang
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Mojang';
        $Desarrollador->save();

        //11 Activision
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Activision';
        $Desarrollador->save();

        //12 Capcom
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Capcom';
        $Desarrollador->save();

        //13 Square Enix
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Square Enix';
        $Desarrollador->save();

        //14 Bend Studio
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Bend Studio';
        $Desarrollador->save();

        //15 BioWare
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'BioWare';
        $Desarrollador->save();

        //16 Insomniac Games
        $Desarrollador = new \App\Models\Desarrollador();
        $Desarrollador->descripcion = 'Insomniac Games';
        $Desarrollador->save();
    }
}
