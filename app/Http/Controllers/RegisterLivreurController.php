<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserLivreur;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterLivreurController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "login";

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


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function index()
    {
        return view('auth.register_livreur');
    }

  /*  public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event (new Registered($user = $this->create($request->all())));
        return redirect ('/login')->with('success', 'Votre compte a bien été crée, vous devez le confirmez avec l email que vous allez recevoir');
    }*/
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => "livreur",
            'status' => "invalid",


        ]);

        $userlivreur = UserLivreur::create([
            'id' => $user->id,
            'name' => $request['name'],
            'prenom' => $request['prenom'],
            'telephone' => $request['telephone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => "livreur",
            'status' => "invalid",
            'user_id' => $user->id,


        ]);
        return redirect ('/login')->with('success', 'Votre compte a bien été crée, vous devez attend la confirmation de l administrateur avec l email que vous allez recevoir');

    }
}
