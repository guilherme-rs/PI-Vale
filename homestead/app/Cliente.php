<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/04/2017
 * Time: 10:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    //protected $table = 'tr_clientes';
    //Mudando PK da tabela
    //protected $primaryKey = 'cliente_id';
    //Tirando o autoincremento
    //public $incrementing = false;

    // Acessor: Personalização dos atributos do banco
    // Estrutura: get(NomeDaPropriedade)Attrinute $cliente->nome_da_propriedade

    public function getIdadeAttribute($value){
        return $value ?: 'Idade não informada.';
    }

    public function getNomeAttribute(){
        return $this->nome_fantasia ?: $this->razao;
    }

    // Mutator: Personalização da forma como os dados são salvos no banco
    // Estrutura: set(NomeDaPropriedade)Attrinute $cliente->nome_da_propriedade

    public function setObsAttribute($value){
        $this->attributes['obs'] = $value ?: 'Nenhuma observação Informada.';
    }

    public function mercadorias(){
        return $this->hasMany(Mercadoria::Class);
    }
	
	public function getAtivoAttribute ($value){
            return $value == 1 ? 'Ativo' : 'Inativo';
        }
}