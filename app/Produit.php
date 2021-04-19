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

	/*public function getTotal()
	{
		$total= $delivery+$price;
	}*/

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
		return $this->belongsTo('App\CommandeProduits','produit_id','id');
	}



}
