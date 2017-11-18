<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function llamados(){
        return $this->hasMany('App\Llamado');
    }
}
