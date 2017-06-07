<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposTabelaPredios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predios', function (Blueprint $table) {
            $table->string('latitude', 255);
            $table->string('longitude', 255);
            $table->integer('distacia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predios', function (Blueprint $table) {
            $table->string('latitude', 255);
            $table->string('longitude', 255);
            $table->integer('distacia');
        });
    }
}
