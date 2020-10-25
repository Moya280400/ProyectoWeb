<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->date('fechaSalida');
            $table->decimal('precio', 8, 2);
            $table->text('pathCover');
            $table->text('pathVideo');
            $table->boolean('estado')->default(true);
            //Asociar con un desarrolador
            $table->unsignedInteger('desarrollador_id');
            //Asociar con un desarrolador
            $table->unsignedInteger('distribuidor_id');

            $table->timestamps();

            //FK Tablas
            //FK Desarrollador
            $table->foreign('desarrollador_id')->references('id')->on('desarrolladors');
            //FK Distribuidor
            $table->foreign('distribuidor_id')->references('id')->on('distribuidors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->dropForeign('videojuegos_desarrollador_id_foreign');
            $table->dropForeign('videojuegos_distribuidor_id_foreign');
        });
        Schema::dropIfExists('videojuegos');
    }
}
