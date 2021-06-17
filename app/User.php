<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,HasApiTokens ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','telephone','password','type','confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_restaurant()
    {
        return $this->hasMany('App\userRestaurant');
    }

    public function client()
    {
        return $this->hasMany('App\Client');
    }

    public function user_livreur()
    {
        return $this->hasMany('App\userLivreur');
    }

    public function commande()
	{
		return $this->hasMany('App\Commande');
	}

}
