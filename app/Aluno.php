<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

	public function user(){
    	return $this->belongsTo('App\User');
    }

	public function endereco(){
		return $this->hasOne('App\Endereco');
	}
    
    public function posse(){
    	return $this->hasMany('App\Posse');
    }
}
