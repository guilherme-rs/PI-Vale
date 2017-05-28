<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:49
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function funcionarios(){
        return $this->hasMany(Funcionario::Class);
    }

    public function predio(){
        return $this->belongsTo(Predio::Class);
    }

    public function rotafuga(){
        return $this->belongsTo(Rotafuga::Class);
    }

}