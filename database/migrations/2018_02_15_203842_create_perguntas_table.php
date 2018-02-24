<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome');
            $table->string('email');
            $table->string('assunto');
            $table->text('descricao');
            $table->text('codigo_fonte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perguntas');
    }
}
