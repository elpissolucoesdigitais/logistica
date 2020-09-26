<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->date('datapedido');
            $table->string('produto');
            $table->string('quantidadeproduto');
            $table->string('categoria');
            $table->string('enderecoentrga');
            $table->string('enderecocoleta');
            $table->string('bairro');
            $table->date('datasaida');
            $table->decimal('valorbruto');
            $table->decimal('comissaomotorista');
            $table->date('datachegada');	
            $table->unsignedInteger('fornecedor_id');
            $table->unsignedInteger('estado_id');
            $table->unsignedInteger('cidade_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('cidade_id')->references('id')->on('cidades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
