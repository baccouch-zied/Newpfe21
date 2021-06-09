<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Stripe;

class StripePaymentController extends Controller
{
    public function index()
    {
        return view('front.commande.paiement');
    }

    public function process(Request $request)
    {
  		\Log::info($request->all());
        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'EUR',
            'amount' => $request->get('amount') * 100
        ]);

        return $stripe;
        //return redirect('/fini-commande')->with('success', 'Votre categorie est ajouté avec sucess');

    }
}
