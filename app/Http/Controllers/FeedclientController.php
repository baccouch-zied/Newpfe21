<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
use App\UserRestaurant;
use App\Client;
use Cart;
use App\CommandeProduits;
use App\Produit;
use App\Feedback;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        # code...
    }
    public function getAddressFeed($idres)
    {
        $id=Auth::user()->id;
        $Client= DB::table('clients')->where('user_id' ,$id)->get();
        return view('front.client.feed',compact('Client','idres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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



        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'name'       =>   $request->name,
            'email'       =>   $request->email,
            'commentaire'       =>   $request->commentaire,
            'image'            =>   $new_name,
            'userrestaurant_id' => $request->idres
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
