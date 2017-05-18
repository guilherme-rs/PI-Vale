<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRenavans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renavans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero', 255);

            $table->integer('veiculo_id')->unsigned();
            $table->foreign('veiculo_id')
                ->references('id')
                ->on('veiculos')
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
        Schema::dropIfExists('renavans');
    }
}
