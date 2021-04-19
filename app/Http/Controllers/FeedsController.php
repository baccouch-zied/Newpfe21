<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Feedback;
use App\user;
use App\Client;
use App\Produit;
use Cart;


use App\UserRestaurant;
use Auth;
class FeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $Client= DB::table('clients')->where('user_id' ,$id)->get();
        return view('front.commande.details-commande',compact('Client'));
    }

    public function indexResto()
    {
        $id=Auth::user()->id;
        $UserRestaurant= DB::table('user_restaurants')->where('user_id' ,$id)->get();
        $feedback = DB::table('feedback')->where('user_id' ,'=' ,$id)->get();

        return view('back.restaurant.feeds.index',compact(['UserRestaurant','feedback']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('back.restaurant.feeds.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'email'    =>  'required',
            'commentaire'    =>  'required',
            'image'         =>  'required',

        ]);

        $first = Cart::content()->first();
        $originalProduit = Produit::find($first->id);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'name'       =>   $request->name,
            'email'       =>   $request->email,
            'commentaire'       =>   $request->commentaire,
            'image'            =>   $new_name,
            'userrestaurant_id' => $originalProduit->user_id
        );

        feedback::create($form_data);

        return redirect('/restaurants')->with('success', 'Votre feed est ajouté avec sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
