<?php

use Illuminate\Database\Seeder;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veiculos')->insert([
            'placa' => 'abc-1234',
            'marca' => 'Fiat',
            'modelo' => 'Fiorino',
            'cor' => 'Branco',
            'combustivel' => 'Gasolina'
        ]);
    }
}