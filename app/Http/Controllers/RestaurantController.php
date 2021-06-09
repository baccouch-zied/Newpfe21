<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\Categorie;
use App\Produit;
use App\Commande;
use App\UserRestaurant;

class RestaurantController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*public function __construct()
    {
        $this->middleware('auth','verified');
    }*/

    public function index()
    {
        $id=Auth::user()->id;
        $UserRestaurant= DB::table('user_restaurants')->where('user_id' ,'=' ,$id)->get();
        $categories= DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        $produits= DB::table('produits')->where('user_id' ,'=' ,$id)->get();
        $commandes= Commande::where('userrestaurant_id' ,'=' ,$id)->get();
        return view('back.restaurant.stat',compact(['UserRestaurant','categories','produits','commandes']));
    }
}
