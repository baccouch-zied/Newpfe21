<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRestaurant;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfosController extends Controller
{
    public function index()
    {
       // dd(Auth::user()->id);
        $id=Auth::user()->id;
        $UserRestaurant= DB::table('user_restaurants')->where('user_id' ,$id)->get();
        return view('back.restaurant.coordonnes.index',compact('UserRestaurant'));
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
                'ouverture' => 'required|string',
                'fermeture' => 'required|string',
                'jour' => 'required|string',
                'adresse' => 'required|string',
                'description' => 'required|string',
                'image'    =>'required',
                'image2'    =>'required'


            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image_name2 = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);
            $image2->move(public_path('images'), $image_name2);

        }
        else
        {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'telephone' => 'required|string',
                'ouverture' => 'required|string',
                'fermeture' => 'required|string',
                'jour' => 'required|string',
                'adresse' => 'required|string',
                'description' => 'required|string',
                'image'    =>'required',
                'image2'    =>'required'

            ]);
        }

        $form_data = array(
            'name' => request('name'),
            'telephone' => request('telephone'),
            'email' => request('email'),
            'ouverture' => request('ouverture'),
            'fermeture' => request('fermeture'),
            'jour'=>request('jour'),
            'adresse' => request('adresse'),
            'description'=>request('description'),     
            'image'            =>   $image_name,
            'image2'            =>   $image_name2


        );
  
        UserRestaurant::whereId($id)->update($form_data);

        return redirect('/infos')->with('success', 'Vos informations sont enregistrés');

    }
}
