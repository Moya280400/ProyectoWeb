<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidoVideojuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_videojuego', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('pedido_id');
            $table->UnsignedBigInteger('videojuego_id');
            $table->integer('cantidad');
            $table->decimal('total', 8, 2);

            $table->timestamps();
            //foreing key
            $table->foreign('pedido_id')->references('id')->on('pedidos');
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
        Schema::table('pedido_videojuego', function (Blueprint $table) {
            $table->dropForeign('pedido_videojuego_pedido_id_foreign');
            $table->dropForeign('pedido_videojuego_videojuego_id_foreign');
        });
        Schema::dropIfExists('pedido_videojuego');
    }
}
