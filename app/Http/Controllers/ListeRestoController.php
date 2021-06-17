<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRestaurant;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationCompte;
class ListeRestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users=User::where('type' ,'=' ,'restaurant')->get();
        return view('back.admin.ListeRestaurants.index', compact('Users'));
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
    public function show(UserRestaurant $UserRestaurant)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {

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
        UserRestaurant::where('id',$id)->update
        ([
         'status' => "valid",
     ]);

        User::where('id',$id)->update
       ([
        'status' => "valid",
        ]);

        Mail::to('zizou.baccouch1998@gmail.com')->send(new ConfirmationCompte($id));
        return redirect('/ListeResto')->with('success', 'Restaurant validé');
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
        return redirect('/ListeResto');
    }
}
