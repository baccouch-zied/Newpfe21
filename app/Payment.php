<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        's_payment_id', 'user_id' ,'commande_id' ,'amount'
    ];
}
