<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mercadoria extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
/*
    public function scopeKombi($query){
        return $query->where('veiculo_id', 2);
    }

    public function scopeVeiculo($query, $veiculo_id){
        return $query->where('veiculo_id', $veiculo_id);
    }

    protected static function boot(){
        parent::boot();

        static::addGlobalScope('fiorino', function (Builder $builder){
            $builder->where('veiculo_id', 1);
        });
    }
*/
    public function cliente(){
        return $this -> belongsTo(Cliente::Class);
    }

    public function veiculo(){
        return $this->belongsTo(Veiculo::Class);
    }
}
