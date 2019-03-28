<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function curso(){
		return $this->belonsTo('App\Curso');
	}

	public function material(){
		return $this->hasMany('App\Material');
	}

	public function posse(){
    	return $this->hasMany('App\Posse');
    }
}
