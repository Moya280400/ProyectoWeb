<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_videojuegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('videojuego_id');
            $table->text('pathImagen');
            $table->timestamps();

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
        Schema::table('imagen_videojuegos', function (Blueprint $table) {
            $table->dropForeign('imagen_videojuegos_videojuego_id_foreign');
        });
        Schema::dropIfExists('imagen_videojuegos');
    }
}
