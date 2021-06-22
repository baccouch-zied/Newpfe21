<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\ReponseContact;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts= Contact::all();
        return view('back.admin.contacts', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email'],
            'message' => 'required'

        ]);

            $contact = new contact;
                $contact ->name = request('name');
                $contact ->email = request('email');
                $contact ->message = request('message');
                $contact ->reponse = "en attente de reponse";

            $contact->save();
            //return redirect('/cars');
            //$matiere->save();^

            Mail::to('zied.baccouch213@gmail.com')->send(new ContactFormMail($validatedData));
            return redirect('/contact')->with('success', 'Votre message est bien envoyé');
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
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('back.admin.reponse', compact('contact'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'reponse' => 'required'
        ],
        [
            'reponse.required' => 'message Champ is required',
        ]
    );

       Contact::where('id',$id)->update
       ([
        'reponse' => request('reponse'),
       ]);

    Mail::to('zizou.baccouch1998@gmail.com')->send(new ReponseContact($request));
     return redirect('listecontacts')->with('success','Reponse envoyé.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact= Contact::findOrFail($id)->delete();
        return redirect('/ListeContact');
    }


}
