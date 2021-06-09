<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UserLivreur extends Model
{
    use Notifiable,HasApiTokens ;

    protected $fillable = [
        'name','telephone','prenom','email','type','password','age','adresse','status','image','user_id'
    ];

    public function user()
	{
		return $this->belongsToMany('App\user');
	}

    public function categorie()
	{
		return $this->hasMany('App\categorie');
	}

    public function commande()
	{
		return $this->hasMany('App\Commande');
	}
}
