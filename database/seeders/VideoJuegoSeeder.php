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
        $Videojuego->id = '1805312949';
        $Videojuego->nombre = 'The Witcher 3: Wild Hunt - Complete Edition';
        $Videojuego->descripcion = 'The Witcher 3: Wild Hunt es un juego de rol de mundo abierto y nueva generación con una apasionante trama que transcurre en un universo de fantasía lleno de decisiones y consecuencias impactantes. En The Witcher serás un cazador de monstruos que busca a la niña de la profecía en un mundo repleto de ciudades, pasos montañosos y cuevas olvidadas.
        Conviértete en un cazador de monstruos profesional
        Adiestrados desde niños y sometidos a mutaciones para adquirir habilidades y fuerza sobrehumanas, los brujos mantienen el equilibrio en un mundo infestado de monstruos.

        Explora un mundo abierto fantástico y de moral laxa
        Creado para albergar aventuras sin fin, el mundo de The Witcher 3 establece nuevos precedentes en cuanto a tamaño, detalle y complejidad.

        Encuentra a la niña de la profecía
        Completa la misión más importante: encontrar a la niña de la profecía, la clave para salvar o destruir el mundo.

        Complete Edition incluye The Witcher 3: Wild Hunt, los 16 DLC y los 2 packs de expansión: Hearts of Stone y Blood and Wine.

        The Witcher® is a trademark of CD PROJEKT S. A. The Witcher game © CD PROJEKT S. A. All rights reserved. The Witcher game is based on a prose by Andrzej Sapkowski. All other copyrights and trademarks are the property of their respective owners.';

        $Videojuego->fechaSalida = '2015-05-18';

        $Videojuego->precio = 25000;

        $Videojuego->pathCover = 'https://i.ibb.co/P5Jx44B/The-Wtcher3-Cover.jpg';

        $Videojuego->pathVideo = 'https://www.youtube.com/embed/ehjJ614QfeM';

        $Videojuego->estado = 1;

        $Videojuego->desarrollador_id = 4;

        $Videojuego->distribuidor_id = 10;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6, 9, 10, 12, 13]);

        //Genero Videojuego
        $Videojuego->generos()->attach([10, 11, 12]);

        //Spider-Man
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id = '4567312949';
        $Videojuego->nombre = "Marvel's Spider-Man: Game of the Year Edition";
        $Videojuego->descripcion = 'Una experiencia de Spider-Man completamente nueva Protagonizada por uno de los superhéroes más icónicos del mundo,Spider-Man presenta las habilidades acrobáticas, la improvisación y el lanzamiento de telarañas por las que es famoso el trepamuros,al tiempo que presenta elementos nunca antes vistos en un juego de Spider-Man.

        Desde atravesar el parkour y las interacciones ambientales únicas, hasta nuevos combates y piezas cinematográficas de éxito de taquilla, Spider-Man no se parece a nadie que hayas jugado antes.

        Sony Interactive Entertainment, Insomniac Games y Marvel se han unido para crear una nueva y auténtica aventura de Spider-Man.

        Este no es el Hombre Araña que has conocido antes o visto en una película. Este es un Peter Parker experimentado que es más experto en la lucha contra el gran crimen en la ciudad de Nueva York.
        Al mismo tiempo, está luchando por equilibrar su caótica vida personal y su carrera mientras el destino de millones de neoyorquinos descansa sobre sus hombros.';

        $Videojuego->fechaSalida = '2018-09-07';

        $Videojuego->precio = 25000;

        $Videojuego->pathCover = 'https://i.ibb.co/wyVc6m1/Marvels-Spider-Man.jpg';

        $Videojuego->pathVideo = 'https://www.youtube.com/embed/8pR0o2fGyHg';

        $Videojuego->estado = 1;

        $Videojuego->desarrollador_id = 16;

        $Videojuego->distribuidor_id = 4;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6]);

        //Genero Videojuego
        $Videojuego->generos()->attach([12, 1]);

        //Doom Eternal
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id = '6667311649';
        $Videojuego->nombre = "DOOM Eternal";
        $Videojuego->descripcion = 'Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones aniquilando demonios para detener la destrucción definitiva de la humanidad.
        No le tienen miedo a nada... salvo a ti.

        Disfruta de la mejor combinación de velocidad y potencia en DOOM Eternal, que trae un salto cualitativo del combate en primera persona.

        NIVEL DE AMENAZA DEL SLAYER AL MÁXIMO
        Armado con un lanzallamas en el hombro, una hoja retráctil en la muñeca, armas y modificaciones mejoradas, y habilidades, eres más rápido, fuerte y versátil que nunca.

        LA IMPÍA TRINIDAD
        Obtén lo que necesites de tus enemigos: consigue salud al ejecutarlos, armadura al incinerarlos y munición al destriparlos con la motosierra; conviértete en el matademonios supremo.

        Juega a BATTLEMODE
        Una nueva experiencia multijugador 2 contra 1. Un DOOM Slayer armado hasta los dientes se enfrenta a dos jugadores demonio en cinco rondas de intenso combate en primera persona.';

        $Videojuego->fechaSalida = '2020-03-19';

        $Videojuego->precio = 36000;

        $Videojuego->pathCover = 'https://i.ibb.co/Xspkyd4/doom-eternal-cover.jpg';

        $Videojuego->pathVideo = 'https://www.youtube.com/embed/FkklG9MA0vM';

        $Videojuego->estado = 1;

        $Videojuego->desarrollador_id = 3;

        $Videojuego->distribuidor_id = 11;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6, 9, 10, 13]);

        //Genero Videojuego
        $Videojuego->generos()->attach([2, 6, 12, 13]);



        //Cyberpunk 2077
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id = '6628200535';
        $Videojuego->nombre = "Cyberpunk 2077";
        $Videojuego->descripcion = 'Cyberpunk 2077 es una historia de acción y aventuras en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal. Te pondrás en la piel de V, un mercenario que persigue un implante único: el secreto de la inmortalidad. Podrás personalizar las mejoras, las habilidades y el estilo del personaje mientras exploras una vasta ciudad en donde tus decisiones afectan la historia y el mundo que te rodea.

        JUEGA COMO UN MERCENARIO FORAJIDO
        Conviértete en un cyberpunk, un mercenario urbano equipado con mejoras cibernéticas y crea tu leyenda en las calles de Night City.

        DESCUBRE LA CIUDAD DEL FUTURO
        Conoce el enorme mundo abierto de Night City, una ciudad que establece una nueva referencia en calidad visual, complejidad y profundidad.

        ROBA EL IMPLANTE DE LA VIDA ETERNA
        Acepta el trabajo más peligroso de tu vida y ve en busca del implante que concede la inmortalidad.';

        $Videojuego->fechaSalida = '2020-12-10';

        $Videojuego->precio = 36000;

        $Videojuego->pathCover = 'https://i.ibb.co/jzZvs3F/cyberpunk-2077-box-art-01-ps4-us-06jun19.jpg';

        $Videojuego->pathVideo = 'https://www.youtube.com/embed/qIcTM8WXFjk';

        $Videojuego->estado = 0;

        $Videojuego->desarrollador_id = 4;

        $Videojuego->distribuidor_id = 10;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6, 9, 10, 13]);

        //Genero Videojuego
        $Videojuego->generos()->attach([1, 2, 12]);

        //Uncharted 4
        $Videojuego = new \App\Models\Videojuego();
        $Videojuego->id = '3423146643';
        $Videojuego->nombre = "Uncharted 4";
        $Videojuego->descripcion = 'Varios años después de su última aventura, el retirado cazador de fortunas, Nathan Drake, es obligado a regresar al mundo de los ladrones.

        Al regresar a la peligrosa vida que intentó dejar atrás deberá decidir qué está dispuesto a sacrificar para salvar a sus seres queridos.

        Únete a Drake, Sam, Elena y Sully en una aventura épica alrededor del mundo por islas tropicales, bulliciosas ciudades y cumbres nevadas en busca de una fortuna perdida.';

        $Videojuego->fechaSalida = '2016-05-09';

        $Videojuego->precio = 10000;

        $Videojuego->pathCover = 'https://i.ibb.co/PcjT5Bp/uncharted-4.jpg';

        $Videojuego->pathVideo = 'https://www.youtube.com/embed/haege34fdUw';

        $Videojuego->estado = 1;

        $Videojuego->desarrollador_id = 6;

        $Videojuego->distribuidor_id = 4;

        $Videojuego->save();

        //Plataforma Videojuego
        $Videojuego->plataformas()->attach([5, 6]);

        //Genero Videojuego
        $Videojuego->generos()->attach([1, 2, 6, 12, 13]);
    }
}
