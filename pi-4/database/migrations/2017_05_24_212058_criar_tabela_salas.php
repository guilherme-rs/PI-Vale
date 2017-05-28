<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->string('andar', 255);

            $table->integer('predio_id')->unsigned();
            $table->foreign('predio_id')
                ->references('id')
                ->on('predios')
                ->onDelete('cascade');

            $table->integer('rotafuga_id')->unsigned();
            $table->foreign('rotafuga_id')
                ->references('id')
                ->on('rotafugas')
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
        Schema::dropIfExists('salas');
    }
}
