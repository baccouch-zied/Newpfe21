<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Commande;
use App\UserRestaurant;
use App\Client;
use Cart;
use App\CommandeProduits;
use App\User;
use App\UserLivreur;
use PDF;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommandeRestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $UserLivreurs=UserLivreur::all();
        $UserRestaurants= DB::table('user_restaurants')->where('user_id' ,$id)->get();
        $commandes= Commande::where('userrestaurant_id' ,'=' ,$id)->orderBy('id', 'DESC') ->get();
        //dd($commandes);
        return view('back.restaurant.commandes.index',compact(['commandes','UserLivreurs','UserRestaurants']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=Auth::user()->id;
        $UserRestaurants= DB::table('user_restaurants')->where('user_id' ,$id)->get();
        $commande= Commande::where('userrestaurant_id' ,'=' ,$id)->get();

        return view('back.restaurant.commandes.telecharger',compact(['commande','UserRestaurants']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande, UserRestaurant $UserRestaurants)
    {
        $UserLivreurs=UserLivreur::all();
        return view('back.restaurant.commandes.show',compact(['commande','UserRestaurants','UserLivreurs']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commandes)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
