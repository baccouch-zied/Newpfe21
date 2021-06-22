<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandeProduits extends Model
{
    protected $fillable = [
        'commande_id','produit_id','total','quantity'
    ];

    public function commande()
	{
		return $this->belongsTo('App\Commande','commande_id','id');
	}

    public function produit()
	{
		return $this->hasOne('App\Produit','id','produit_id');
	}

}
