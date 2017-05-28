<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaChecklists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->tinyInteger('estado')->index();

            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoas')
                ->onDelete('cascade');

            $table->integer('incidente_id')->unsigned();
            $table->foreign('incidente_id')
                ->references('id')
                ->on('incidentes')
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
        Schema::dropIfExists('checklists');
    }
}
