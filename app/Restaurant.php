<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'nom', 'description', 'telephone','image'
        ];
    
    public function commande() 
    { 
        return $this->hasMany('App\commande');
    }
}
