<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['nome'];

    public function turma(){
    	return $this->belongsTo('App\Turma');
    }
}
