<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renavan extends Model
{
    public function veiculo(){
        return $this->belongsTo(Veiculo::Class);
    }
}
