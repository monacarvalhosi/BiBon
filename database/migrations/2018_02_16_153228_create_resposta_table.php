<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('nome');
            $table->string('email');
            $table->string('assunto');
            $table->text('descricao');
            $table->text('codigo_fonte');
           $table->integer('pergunta_id')->unsigned();
          $table->foreign('pergunta_id')
             ->references('codigo')
            ->on('perguntas');
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
        Schema::drop('respostas');
    }
}
