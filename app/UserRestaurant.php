<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UserRestaurant extends Authenticatable
{
    use Notifiable,HasApiTokens ;

    protected $fillable = [
        'name','telephone','ouverture','fermeture','jour','adresse','etat','description','image','image2','email','password','type','user_id'
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

