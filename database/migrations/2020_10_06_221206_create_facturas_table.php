<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_emision');
            $table->decimal('subtotal',8,2);
            $table->decimal('impuesto',8,2);
            $table->decimal('total',8,2);
            //foreing key
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedInteger('usuario_id');



            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->dropForeign('facturas_usuario_id_foreign');
            $table->dropForeign('facturas_pedido_id_foreign');

        });
        Schema::dropIfExists('facturas');
    }
}
