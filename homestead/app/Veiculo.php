<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public function mercadorias(){
        return $this->hasMany(Mercadoria::Class);
    }

    public function renavan(){
        return $this->hasOne(Renavan::Class);
    }

    public function motoristas(){
        return $this->belongsToMany(Motorista::Class, 'veiculos_motoristas');
    }
}
