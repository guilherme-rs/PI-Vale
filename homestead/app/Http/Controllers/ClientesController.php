<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller{
    public function index(){
        return view('clientes.index');
    }
    public function detalhes($id, $request){
        $clientes = $request->session()->get('clientes', []);
        $nome = $clientes[$id];
        return view('clientes.detalhes', ['nome_cliente' => $nome]);
    }
    public function salvar($request){
        $nome = Input::get('nome');
        $clientes = $request->session()->get('clientes');
        if(!clientes){
            $clientes = array();
        }
        array_push($clientes, $nome);
        $request->session()->put('clientes', $clientes);
        $clientesAtualizados = $request->session()->get('clientes');
        $texto = "";
        foreach ($clientesAtualizados as $id => $clientes){
            $texto .= "{$clientes}, ";
        }
        return "Cliente {$nome} salvo. Clientes cadastrados: {$texto}";
    }
    public function enderecos($id, $end_id){
        return 'Endereço '.$end_id.' do cliente'.$id;
    }

    public function testeAdd(){
        $clientes = new Cliente();
        $clientes ->razao = 'Empresa B';
        $clientes ->razao = 'Nome B';
        $clientes ->cnpj = '00987654000132';
        $clientes ->email = 'email.b@dominio.com';
        $clientes ->obs = 'Outra observação qualquer';
        $clientes ->save();

        return 'Salvo!';
    }
}