<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:47
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public function pessoa(){
        return $this->belongsTo(Pessoa::Class);
    }

    public function sala(){
        return $this->belongsTo(Sala::Class);
    }

}