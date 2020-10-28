<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('direccion_entrega',200);
            $table->decimal('subtotal',8,2);
            $table->decimal('costo_envio',8,2);
            $table->decimal('impuesto',8,2);
            $table->decimal('total',8,2);
            $table->boolean('estado')->default(true);
            //foreing key
            $table->string('cliente_id',200);
            $table->Unsignedinteger('usuario_id');
            $table->string('repartidor_id',200)->nullable();
            $table->Unsignedinteger('tipo_entrega_id');


            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('repartidor_id')->references('id')->on('repartidors');
            $table->foreign('tipo_entrega_id')->references('id')->on('tipo_entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('pedidos_cliente_id_foreign');
            $table->dropForeign('pedidos_usuario_id_foreign');
            $table->dropForeign('pedidos_repartidor_id_foreign');
            $table->dropForeign('pedidos_tipo_entrega_id_foreign');
        });
        Schema::dropIfExists('pedidos');
    }
}
