<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table_name = 'materiais'; 

    return $this->belongsTo('App\Turma');
}
