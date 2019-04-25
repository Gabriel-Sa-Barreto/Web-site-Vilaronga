<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

	protected $primaryKey = 'aluno_id';

	public function aluno() { 
    	return $this->belongsTo('App\Aluno');
    }
}
