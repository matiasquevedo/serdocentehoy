<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function llamados(){
        return $this->hasMany('App\Llamado');
    }

    public function institucion(){
        return $this->belongsTo('App\Insitucion');
    }

    public function admin(){
        return $this->type === 'admin';
    }

    public function docente(){
        return $this->type === 'docente';
    }

    public function escuela(){
        return $this->type === 'escuela';
    }

  /*  DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inggerar_serdocentehoy
DB_USERNAME=inggerar_docente
DB_PASSWORD=soydocente*/
}
