<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
use App\UserRestaurant;
use App\Client;
use App\CommandeProduits;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilClientController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $Client= DB::table('clients')->where('user_id' ,'=' ,$id)->get();
        $commandes= Commande::where('user_id' ,'=' ,$id)->get();
        return view('front.client.mon-profil',compact(['Client','commandes']));
    }

    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image_name2 = $request->hidden_image;
        $image = $request->file('image');
        $image2 = $request->file('image2');

        if($image != '')
        {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'telephone' => 'required|string',
                'adresse' => 'required|string',
                'image'    =>'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);

        }
        else
        {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'telephone' => 'required|string',
                'adresse' => 'required|string',
                'image'    =>'required'

            ]);
        }

        $form_data = array(
            'name' => request('name'),
            'telephone' => request('telephone'),
            'email' => request('email'),
            'adresse' => request('adresse'),
            'image'            =>   $image_name
        );

        Client::whereId($id)->update($form_data);

        return redirect('/mon-profil')->with('success', 'Vos informations sont modifiées');

    }
}
