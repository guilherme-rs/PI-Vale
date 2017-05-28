<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:48
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    public function salas(){
        return $this->hasMany(Sala::Class);
    }
}