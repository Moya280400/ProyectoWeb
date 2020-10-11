<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id', 200);
            $table->string('nombre', 200);
            $table->string('correo', 200);
            $table->string('telefono', 200);
            $table->string('contrasenna', 200);
            $table->boolean('estado')->default(true);
            $table->unsignedInteger('rol_id');
            $table->timestamps();
             //Foreing key
            $table->primary('id');
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('usuarios_rol_id_foreign');
        });
        Schema::dropIfExists('usuarios');
    }
}
