<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Commande;
use App\UserRestaurant;
use App\UserLivreur;
use App\Client;
use Cart;
use App\CommandeProduits;
use PDF;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccepterCommande;
use Illuminate\Support\Facades\DB;

class AccepterCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $commandes= Commande::where('userrestaurant_id' ,'=' ,$id)->get();
        return view('back.restaurant.commandes.show',compact('commandes'));
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
        //
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
    public function edit(Commande $commande)
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
    public function update(Request $request,$id)
    {
        $com = Commande::find($request->id);
        $com->userlivreur_id = $request->livreurId;
         $com->save();

        $this->validate($request,[
            'message' => 'required'
        ],
        [
            'message.required' => 'message Champ is required',
        ]
    );

       Commande::where('id',$id)->update
       ([
        'etat' => "en cours",
        'etatlivreur' => "non confirmé",

    ]);

    Mail::to('zizou.baccouch1998@gmail.com')->send(new AccepterCommande($request));
     return redirect('commandes')->with('success','Mail envoyé ,Commande validé et en attente la confirmation de livreur.');
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
