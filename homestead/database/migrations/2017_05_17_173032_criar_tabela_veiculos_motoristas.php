<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaVeiculosMotoristas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos_motoristas', function (Blueprint $table) {
            $table->integer('veiculo_id')->unsigned();
			$table->foreign('veiculo_id')
				->references('id')
				->on('veiculos')
				->onDelete('cascade');
			
			$table->integer('motorista_id')->unsigned();
			$table->foreign('motorista_id')
				->references('id')
				->on('motoristas')
				->onDelete('cascade');

			$table->primary(['veiculo_id', 'motorista_id']);
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
        Schema::dropIfExists('veiculos_motoristas');
    }
}
