<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GeneroVideojuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_videojuego', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('genero_id');
            $table->unsignedBigInteger('videojuego_id');
            


            $table->timestamps();
            //foreing key
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('videojuego_id')->references('id')->on('videojuegos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genero_videojuego', function (Blueprint $table) {
            $table->dropForeign('genero_videojuego_genero_id_foreign');
            $table->dropForeign('genero_videojuego_videojuego_id_foreign');
        });
        Schema::dropIfExists('genero_videojuego');
    }
}
