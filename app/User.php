<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function aluno(){
    	return $this->hasMany('App\Aluno');
    }

    public function administrador(){
    	return $this->hasMany('App\Administrador');
    }

    public function professor(){
    	return $this->hasMany('App\Professor');
    }
}
