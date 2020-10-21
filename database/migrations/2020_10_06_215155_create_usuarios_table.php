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
            $table->increments('id');
            $table->string('nombre', 200);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefono', 200);
            $table->string('password', 200);
            $table->rememberToken();
            $table->boolean('estado')->default(true);
            $table->unsignedInteger('rol_id');
            $table->timestamps();
             //Foreing key
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
