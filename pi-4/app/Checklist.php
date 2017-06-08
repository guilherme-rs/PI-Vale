<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/05/2017
 * Time: 16:47
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Checklist extends  Model
{
    public function incidente(){
        return $this->belongsTo(Incidente::Class);
    }
}