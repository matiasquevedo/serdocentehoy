<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //

    public function llamados(){
    	return $this->hasMany('App\Llamado');
    }
}
