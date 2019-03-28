<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    return $this->belongsTo('App\Aluno');
}
