<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    protected $fillable = [
    'nom', 'prenom', 'telephone','etat','image'
    ];

    public function commande() 
    { 
        return $this->hasMany('App\commande');
    }
}
