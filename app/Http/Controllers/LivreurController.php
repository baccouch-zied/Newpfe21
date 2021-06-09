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
        $id=Auth::user()->id;
        $UserLivreur= DB::table('user_livreurs')->where('user_id' ,'=' ,$id)->get();
        //$commandes= DB::table('commandes')->where('userlivreur_id' ,'=' ,$id)->get();
        $commandes= Commande::where('userlivreur_id' ,'=' ,$id)->get();
        return view('back.livreur.stat',compact(['UserLivreur','commandes']));
    }
}
