<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula', 255)->unique()->index();
            $table->string('senha', 255);
            $table->tinyInteger('liderFuga');

            $table->integer('sala_id')->unsigned();
            $table->foreign('sala_id')
                ->references('id')
                ->on('salas')
                ->onDelete('cascade');

            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('funcionarios');
    }
}
