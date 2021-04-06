<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use App\Categorie;
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
        $categorie= categorie::all();
        return view('back.restaurant.index',compact(['UserRestaurant','categorie']));
    }
}
