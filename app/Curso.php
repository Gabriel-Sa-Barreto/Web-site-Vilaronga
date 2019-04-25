<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

	public function professor(){
		return $this->hasMany('App\Professor');
	}

	public function turma(){
		return $this->hasMany('App\Turma');
	}
}
