<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posse extends Model
{
    protected $primaryKey = ['aluno_id', 'turma_id'];

    public $incrementing = false;

    public function aluno(){
    	return $this->belongsTo('App\Aluno');
    }

    public function nota(){
    	return $this->belongsTo('App\Nota');
    }

    public function turma(){
    	return $this->belongsTo('App\Turma');
    }


}
