<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table_name = 'professores'; 

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function curso(){
    	return $this->belongsTo('App\Curso');
	}
}
