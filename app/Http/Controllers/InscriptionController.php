<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('front.client.login');
    }

    public function register()
    {
        return view('front.client.register');
    }
}
