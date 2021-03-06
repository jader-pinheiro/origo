<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 60);
            $table->string('email', 60);
            $table->string('telefone', 20);
            $table->string('estado', 30);
            $table->string('cidade', 30);
            $table->string('data_nasc', 20);
            $table->integer('plano_id')->unsigned()->nullable();
            // $table->foreign('plano_id')->references('id')->on('planos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
