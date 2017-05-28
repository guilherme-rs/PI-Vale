<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:51
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    public function pessoa(){
        return $this->belongsTo(Pessoa::Class);
    }
}