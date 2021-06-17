<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Commande;

class Profilcontroller extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $Client= DB::table('clients')->where('user_id' ,'=' ,$id)->first();
        return response($Client);
    }
}
