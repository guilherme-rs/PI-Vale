<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'razao' => 'Empresa A',
            'nome_fantasia' => 'Nome A',
            'cnpj' => '00123456000109',
            'email' => 'email@dominio.com',
            'obs' => 'Uma observacao qualquer'
        ]);
    }
}
