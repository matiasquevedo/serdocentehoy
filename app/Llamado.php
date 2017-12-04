<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Llamado extends Model
{
    //
    protected $fillable = [
        'titulo', 'fecha', 'hora','orden','orden','horario_catedra','descripcion','institucion_id'
    ];

    public function institucion(){
    	return $this->belongsTo('App\Institucion');
    }

    public function area(){
    	return $this->belongsTo('App\Area');
    }
}
