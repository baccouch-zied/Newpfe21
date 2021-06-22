<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    protected $fillable = [
        'name', 'price','image','details','categorie_id','quantity','user_id'
    ];

	public function getDlivery()
	{
		$delivery=3;
	}


    public function user()
	{
		return $this->belongsToMany('App\User');
	}


    public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	}

    public function commandeProduits()
	{
		return $this->belongsTo('App\CommandeProduits','id','produit_id');
	}

    public function commandes()
    {
        return $this->belongToMany('App\Commande');
    }



}
