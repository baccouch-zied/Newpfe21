<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'name', 'prenom', 'telephone','heure','produits','email','adresse','payement_method','etat','commentaire','user_id','userrestaurant_id','userlivreur_id'
    ];

    public function client()
	{
		return $this->belongsToMany('App\client', 'id', 'client_id');
	}

    public function user()
	{
		return $this->belongsToMany('App\User', 'id', 'user_id');
	}

    public function userrestaurant()
	{
		return $this->belongsToMany('App\UserRestaurant');
	}

    public function userlivreur()
	{
		return $this->belongsToMany('App\UserLivreur');
	}

    public function commandeProduits()
	{
		return $this->belongsTo('App\CommandeProduits','id','commande_id');
	}

}
