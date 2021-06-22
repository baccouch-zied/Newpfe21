<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLivreur;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfosLivreurController extends Controller
{
    public function index()
    {
       // dd(Auth::user()->id);
        $id=Auth::user()->id;
        $UserLivreur= DB::table('user_livreurs')->where('user_id' ,$id)->get();
        return view('back.livreur.coordonnes.informations',compact('UserLivreur'));
    }

    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'name' => 'required|string',
                'prenom' => 'required|string',
                'telephone' => 'required|string',
                'age' => 'required|string',
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
                'prenom' => 'required|string',
                'telephone' => 'required|string',
                'age' => 'required|string',
                'adresse' => 'required|string',
                'image'    =>'required'

            ]);
        }

        $form_data = array(
            'name' => request('name'),
            'prenom' => request('prenom'),
            'age' => request('age'),
            'telephone' => request('telephone'),
            'email' => request('email'),
            'adresse' => request('adresse'),
            'image'            =>   $image_name,


        );

        UserLivreur::whereId($id)->update($form_data);

        return redirect('/infosLivreur')->with('success', 'Vos informations sont enregistrés');

    }
}
