<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:47
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    public function funcionario(){
        return $this->belongsTo(Funcionario::Class);
    }

    public function checklist(){
        return $this->hasOne(Checklist::Class);
    }

    public function getAlertaAbandonoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}