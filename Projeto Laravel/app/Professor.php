<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
	protected $guard = 'professor';

    use Notifiable;

	protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*public function user(){
    	return $this->belongsTo('App\User');
    }*/

    public function curso(){
    	return $this->belongsTo('App\Curso');
	}
}
