<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom', 'image' ,'user_id'
    ];

    public function produit()
    {
        return $this->hasMany('App\produit');
    }

    public function user()
	{
		return $this->belongsToMany('App\User');
	}


    public function userRestaurant()
	{
		return $this->belongsToMany('App\UserRestaurant');
	}


}
