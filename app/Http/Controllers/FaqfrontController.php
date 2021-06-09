<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqfrontController extends Controller
{
    public function index()
    {
        $faqs= faq::all();
        return view('front.faqs',compact('faqs'));
    }
}
