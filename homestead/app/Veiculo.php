<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public function mercadorias(){
        return $this->hasMany(Mercadoria::Class);
    }
}
