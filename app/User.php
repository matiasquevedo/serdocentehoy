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

    public function admin(){
        return $this->type === 'admin';
    }

    public function docente(){
        return $this->type === 'docente';
    }

    public function escuela(){
        return $this->type === 'escuela';
    }
}
