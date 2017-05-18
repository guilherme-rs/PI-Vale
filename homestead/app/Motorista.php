<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    public function veiculos(){
        return $this->belongsToMany(Veiculo::Class, 'veiculos_motoristas');
    }
}
