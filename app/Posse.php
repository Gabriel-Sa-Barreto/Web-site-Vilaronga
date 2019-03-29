<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posse extends Model
{
    protected $primaryKey = ['aluno_id', 'turma_id'];

    public $incrementing = false;

}
