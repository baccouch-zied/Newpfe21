<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\UserRestaurant;
use App\UserLivreur;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerResto(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'password'=>'required',
            'type' => 'required'

        ]);

        $userRestaurant = UserRestaurant::create($validatedData);
        $accessToken  = $userRestaurant->createToken('authToken')->access_token;
        return response(['userRestaurant'=>$userRestaurant, 'access_token'=> $accessToken]);
    }

    public function registerLivreur(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'password'=>'required',
            'type' => 'required'

        ]);

        $userLivreur = UserLivreur::create($validatedData);
        $accessToken  = $UserLivreur->createToken('authToken')->access_token;
        return response(['userLivreur'=>$userLivreur, 'access_token'=> $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);
        
        if(!auth()->attempt($loginData)){
            return response(['message'=>'Invalid credentials']);
        }
    

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response(['user'=> auth()->user(), 'access_token'=>$accessToken]);
    }

 
}
