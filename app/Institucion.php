<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Institucion extends Model
{
    //
	protected $table = "instituciones";

    protected $fillable = [
        'nombre', '	numero', 'ubicacion','nivel','tipo','user_id'];

    public function llamados(){
    	return $this->hasMany('App\Llamado');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
