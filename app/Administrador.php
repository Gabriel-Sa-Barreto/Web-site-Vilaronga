<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table_name = 'administrador';

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
