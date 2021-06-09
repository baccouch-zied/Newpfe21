<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserRestaurant;
use App\User;


class DetailsController extends Controller
{
    public function afficheCat($id)
    {
        $categories = DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        $UserRestaurant=UserRestaurant::findOrFail($id);
        return response($categories);
    }

    public function afficheProd($id)
    {
        $produits = DB::table('produits')->where('user_id' ,'=' ,$id)->get();
        $UserRestaurant=UserRestaurant::findOrFail($id);
        return response($produits);
    }
}
