<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLivreur;
use App\Commande;
class EnvoyerCommande extends Controller
{
    public function envoi(Request $request)
    {

     $com = Commande::find($request->id);
     $com->userlivreur_id = $request->livreurId;
     $com->save();

     return redirect('commandes')->with('success','Commande envoyé au livreur ');

    }
}
