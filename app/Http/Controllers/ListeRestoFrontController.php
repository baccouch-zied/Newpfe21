<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\UserRestaurant;
use App\User;

class ListeRestoFrontController extends Controller
{
    public function index()
    {
        $search= request()->query('search');
        $UserRestaurants= UserRestaurant::all();
        return view('front.restaurants', compact('UserRestaurants'));
    }

    public function search()
    {
        $search =$_GET['query'];
        $UserRestaurants = UserRestaurant::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('front.restaurants', compact('UserRestaurants'));

    }

    public function details($id)
    {
        $produits = DB::table('produits')->where('user_id' ,'=' ,$id)->get();
        $categories = DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        $feedback = DB::table('feedback')->where('userrestaurant_id' ,'=' ,$id)->get();

        $UserRestaurant=UserRestaurant::findOrFail($id); 
        return view('front.restaurant-details',compact(['produits','categories','UserRestaurant','feedback']));
    }
}
