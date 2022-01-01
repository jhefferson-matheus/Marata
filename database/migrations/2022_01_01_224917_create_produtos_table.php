<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table){
            $table->id(); //ID dos produtos
            $table->string('nome'); //Campo o qual espera uma entrada de texto com o nome do produto
            $table->decimal('custo', 19, 2); //Campo o qual esperar uma entrada decimal detinada ao custo do produto
            $table->decimal('preco', 19, 2); //Campo reservado para entrada decimal dos preços dos produtos
            $table->integer('quantidade'); //Entrada de texto reservada para números inteiros sobre a quantidade de produtos
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
        Schema::dropIfExists('produtos');
    }
}