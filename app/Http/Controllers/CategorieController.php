<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\categorie;
use App\user;
use App\UserRestaurant;
use Auth;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $categories= DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.restaurant.categorie.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=Auth::user()->id;
        $request->validate([
            'nom'    =>  'required',
            'image'         =>  'required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'nom'       =>   $request->nom,
            'image'            =>   $new_name,
            'user_id' =>$id
        );

        categorie::create($form_data);

        return redirect('categorie')->with('success', 'Votre categorie est ajouté avec sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view('back.restaurant.categorie.show',compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $id=Auth::user()->id;
        $categories= DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.categorie.edit', compact('categorie'));
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
        $image_name = $request->hidden_image;

        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'nom'    =>  'required',
                'image'    =>  'image|max:2048'


            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);

        }
        else
        {
            $request->validate([
                'nom'    =>  'required',
                'description' => 'required'
            ]);
        }

        $form_data = array(
            'nom'       =>   $request->nom,
            'image'            =>   $image_name

        );

        categorie::whereId($id)->update($form_data);

        return redirect('categorie')->with('success', 'Votre categorie est modifié avec sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect('/categorie');
    }
}
