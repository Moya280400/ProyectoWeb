<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('modelo', 200);
            //Asociar con un tipo vehiculo
            $table->unsignedInteger('tipo_vehiculo_id');
            //Asociar con una marca
            $table->unsignedInteger('marca_id');

            $table->timestamps();

            //FK Tablas
            //FK Tipo vehiculo
            $table->primary('id');
            $table->foreign('tipo_vehiculo_id')->references('id')->on('tipo_vehiculos');
            //FK Marca
            $table->foreign('marca_id')->references('id')->on('marca_vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropForeign('vehiculos_tipo_vehiculo_id_foreign');
            $table->dropForeign('vehiculos_marca_id_foreign');
        });
        Schema::dropIfExists('vehiculos');
    }
}
