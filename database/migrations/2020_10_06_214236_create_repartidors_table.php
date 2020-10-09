<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepartidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repartidors', function (Blueprint $table) {
            $table->string('id',200);
            $table->string('nombre',200);
            $table->string('correo',200);
            $table->string('telefono',200);
            $table->string('vehiculo_id',10);
            $table->boolean('estado')->default(true);
            //Llave primaria manual
            $table->primary('id');
            //Foreing key
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repartidors', function (Blueprint $table) {
            $table->dropForeign('repartidors_vehiculo_id_foreign');
        });
        Schema::dropIfExists('repartidors');
    }
}
