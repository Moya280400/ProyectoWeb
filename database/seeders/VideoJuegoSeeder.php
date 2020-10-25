<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoJuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //The Witcher
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id='1805312949';
        $Videojuego->nombre = 'The Witcher 3: Wild Hunt - Complete Edition';
        $Videojuego->descripcion ='The Witcher 3: Wild Hunt es un juego de rol de mundo abierto y nueva generación con una apasionante trama que transcurre en un universo de fantasía lleno de decisiones y consecuencias impactantes. En The Witcher serás un cazador de monstruos que busca a la niña de la profecía en un mundo repleto de ciudades, pasos montañosos y cuevas olvidadas.
        Conviértete en un cazador de monstruos profesional
        Adiestrados desde niños y sometidos a mutaciones para adquirir habilidades y fuerza sobrehumanas, los brujos mantienen el equilibrio en un mundo infestado de monstruos.

        Explora un mundo abierto fantástico y de moral laxa
        Creado para albergar aventuras sin fin, el mundo de The Witcher 3 establece nuevos precedentes en cuanto a tamaño, detalle y complejidad.

        Encuentra a la niña de la profecía
        Completa la misión más importante: encontrar a la niña de la profecía, la clave para salvar o destruir el mundo.

        Complete Edition incluye The Witcher 3: Wild Hunt, los 16 DLC y los 2 packs de expansión: Hearts of Stone y Blood and Wine.

        The Witcher® is a trademark of CD PROJEKT S. A. The Witcher game © CD PROJEKT S. A. All rights reserved. The Witcher game is based on a prose by Andrzej Sapkowski. All other copyrights and trademarks are the property of their respective owners.';

        $Videojuego->fechaSalida='2015-05-18';

        $Videojuego->precio= 25000 ;

        $Videojuego->pathCover='https://i.ibb.co/P5Jx44B/The-Wtcher3-Cover.jpg';

        $Videojuego->pathVideo='https://youtu.be/ehjJ614QfeM';

        $Videojuego->estado= 1 ;

        $Videojuego->desarrollador_id=4;

        $Videojuego->distribuidor_id=10;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6, 9, 10, 12, 13]);

         //Genero Videojuego
        $Videojuego->generos()->attach([10,11,12]);

        //Spider-Man
        //The Witcher
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id='4567312949';
        $Videojuego->nombre = "Marvel's Spider-Man: Game of the Year Edition";
        $Videojuego->descripcion ='Una experiencia de Spider-Man completamente nueva Protagonizada por uno de los superhéroes más icónicos del mundo,
        Spider-Man presenta las habilidades acrobáticas, la improvisación y el lanzamiento de telarañas por las que es famoso el trepamuros,
        al tiempo que presenta elementos nunca antes vistos en un juego de Spider-Man. Desde atravesar el parkour y las interacciones ambientales únicas,
        hasta nuevos combates y piezas cinematográficas de éxito de taquilla, Spider-Man no se parece a nadie que hayas jugado antes.

        Sony Interactive Entertainment, Insomniac Games y Marvel se han unido para crear una nueva y auténtica aventura de Spider-Man.
        Este no es el Hombre Araña que has conocido antes o visto en una película. Este es un Peter Parker experimentado que es más experto en la lucha contra el gran crimen en la ciudad de Nueva York.
        Al mismo tiempo, está luchando por equilibrar su caótica vida personal y su carrera mientras el destino de millones de neoyorquinos descansa sobre sus hombros.';

        $Videojuego->fechaSalida='2018-09-07';

        $Videojuego->precio= 25000 ;

        $Videojuego->pathCover='https://i.ibb.co/wyVc6m1/Marvels-Spider-Man.jpg';

        $Videojuego->pathVideo='https://youtu.be/8pR0o2fGyHg';

        $Videojuego->estado= 1 ;

        $Videojuego->desarrollador_id=16;

        $Videojuego->distribuidor_id=4;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6]);

         //Genero Videojuego
        $Videojuego->generos()->attach([12,1]);
    }
}
