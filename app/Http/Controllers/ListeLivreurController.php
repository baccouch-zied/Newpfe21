<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLivreur;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationCompte;
use Illuminate\Support\Facades\Auth;

class ListeLivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users=User::where('type' ,'=' ,'livreur')->get();
        return view('back.admin.ListeLivreurs.index', compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id',$id)->update
        ([
         'status' => "valid",
     ]);

     UserLivreur::where('id',$id)->update
        ([
         'status' => "valid",
     ]);
     $UserLivreur=UserLivreur::where('user_id' ,'=' ,$id)->first();
     $id=$UserLivreur->user_id;
     Mail::to($UserLivreur->email)->send(new ConfirmationCompte($id));

         return redirect('/ListeLivreur')->with('success', 'Livreur validé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User= User::findOrFail($id)->delete();
        return redirect('/ListeLivreur');
    }
}
