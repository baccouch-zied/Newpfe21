<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRestaurant;
use App\FeedbackSite;

use App\user;
use App\Client;
use App\faq;

use Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $feedbacksite =  FeedbackSite::all();
        $UserRestaurants= DB::table('user_restaurants')->orderBy('created_at','desc')->limit(4)->get();
        $User=User::all();
        $faqs= faq::all();
        return view('front.index', compact(['UserRestaurants','feedbacksite','User','faqs']));    }
}
