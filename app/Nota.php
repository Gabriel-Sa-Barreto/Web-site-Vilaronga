<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function posse(){
    	return $this->hasMany('App\Posse');
    }
}
