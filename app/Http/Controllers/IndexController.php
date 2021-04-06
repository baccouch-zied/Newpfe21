<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRestaurant;
use App\FeedbackSite;

use App\user;
use App\Client;
use Auth;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        //$id=Auth::user()->id;
        //$Client= DB::table('clients')->where('user_id' ,$id)->get();
        $feedbacksite =  FeedbackSite::all();
        $UserRestaurants= DB::table('user_restaurants')->orderBy('created_at','desc')->limit(4)->get();
        return view('front.index', compact(['UserRestaurants','feedbacksite']));
    }

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
            'image'            =>   $new_name

        );

        FeedbackSite::create($form_data);

        return redirect('/')->with('success', 'Merci pour vos avis');
    }

}
