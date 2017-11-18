<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Llamado extends Model
{
    //
    protected $fillable = [
        'institucion_id', '	area_id', 'titulo','fechahora','orden','horario_catedra','descripcion'
    ];

    public function institucion(){
    	return $this->belongsTo('App\Institucion');
    }

    public function area(){
    	return $this->belongsTo('App\Area');
    }
}
