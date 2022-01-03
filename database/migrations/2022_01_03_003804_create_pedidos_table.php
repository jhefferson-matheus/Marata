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
            $table->id(); //ID do pedido
            $table->integer('id_produto'); //ID do produtos
            $table->string('status'); //Status do pedido - (Em Aberto, Pago ou Cancelado)            
            $table->integer('quantidade'); //Quantidade solicitada
            $table->timestamps(); //Carimbo de data e hora do laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
