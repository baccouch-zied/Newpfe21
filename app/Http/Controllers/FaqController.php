<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs= faq::all();
        return view('back.admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs= faq::all();
        return view('back.admin.faq.create', compact('faqs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'reponse' => 'required',

        ]);

        $form_data = array(
            'question'       =>   $request->question,
            'reponse'        =>   $request->reponse
        );

        faq::create($form_data);

        return redirect('faq')->with('success', 'Faq ajouté avec success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $faqs= faq::all();
        return view('back.admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $validatedData = request()->validate([
            'question' => 'required',
            'reponse' => 'required',
        ]);

        /*$car->name = request('name');
        $car->color = request('color');
        $car->company = request('company');
        $car->save();*/

        $faq->update($validatedData);

        return redirect('/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }
}
