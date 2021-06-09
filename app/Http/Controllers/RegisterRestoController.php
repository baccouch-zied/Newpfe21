<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserRestaurant;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterFormMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterRestoController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "resto";

    //*protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register_restaurant');
    }


    /*public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event (new Registered($user = $this->create($request->all())));
        return redirect ('/login')->with('success', 'Votre compte a bien été crée, vous devez le confirmez avec l email que vous allez recevoir');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_restaurants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
       /* $user = User::where("email", '=', $request->email)->get();
        if($user){
             echo('helo');
        }*/
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => "restaurant",
            'status' => "invalid",
        ]);

        $userrestaurant = UserRestaurant::create([
            'name' => $request['name'],
            'telephone' => $request['telephone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => "restaurant",
            'status' => "invalid",
            'user_id' => $user->id,

        ]);
        Mail::to('zied.baccouch213@gmail.com')->send(new RegisterFormMail($userrestaurant));

        return redirect ('/login')->with('success', 'Votre compte a bien été crée, vous devez attend la confirmation de l administrateur avec l email que vous allez recevoir');

    }
}
