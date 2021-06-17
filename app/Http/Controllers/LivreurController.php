<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\Commande;
use App\UserLivreur;
class LivreurController extends Controller
{
    public function index()
    {
        $id=Auth::User()->id;
        $UserLivreur=UserLivreur::where('user_id' ,'=' ,$id)->first();
        $commandes= Commande::where('userlivreur_id' ,'=' ,$UserLivreur->id)->get();
        return view('back.livreur.stat',compact(['UserLivreur','commandes']));
    }
}
