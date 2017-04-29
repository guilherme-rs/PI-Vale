<?php

use Illuminate\Database\Seeder;

class MercadoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mercadorias')->insert([
            'codigobarras' => '123456789012',
            'notafiscal' => '123456',
            'destino' => 'Rua A, 1 Bairro Tal - ES CEP:12.345-678',
            'cliente_id' => 1,
            'veiculo_id' => 1
        ]);
    }
}