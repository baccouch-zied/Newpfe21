<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackSite extends Model
{
    protected $fillable = [
        'name', 'email' ,'image' ,'commentaire'
    ];
}
