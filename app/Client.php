<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class Client extends Model
{
    use Notifiable,HasApiTokens ;

    protected $fillable = [
        'name', 'prenom', 'telephone','type','password','email','adresse','image','user_id'
    ];

    public function user()
	{
		return $this->belongsToMany('App\user');
	}

    public function commande() 
    { 
        return $this->hasMany('App\commande');
    }
}
