<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'name', 'prenom', 'telephone','heure','produits','email','adresse','etat','commentaire','user_id','userrestaurant_id','userlivreur_id'
    ];

    public function client()
	{
		return $this->belongsToMany('App\client', 'id', 'client_id');
	}

    public function userrestaurant()
	{
		return $this->belongsToMany('App\UserRestaurant');
	}

    public function userlivreur()
	{
		return $this->belongsToMany('App\UserLivreur');
	}

	public function produits()
	{
		return $this->belongsToMany(
        Produit::class,
        'produits_commandes',
        'commande_id',
        'produit_id')->withPivot('total', 'quantity');
	}
}
