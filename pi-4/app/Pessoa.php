<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:48
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function funcionario(){
        return $this->hasOne(Funcionario::Class);
    }

    public function visitante(){
        return $this->hasOne(Visitante::Class);
    }
}