<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categorie;
use App\produit;
use App\user;
use DB;
use auth;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*$id*/)
    {
        $id=Auth::user()->id;
        //DB::table('categories')->where('userRestaurant_id' ,'=' ,$id)->get();
        $produits= DB::table('produits')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.produit.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=Auth::user()->id;
        $categories= DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.produit.create', compact('categories'));

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
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'categorie_id' => 'required',
            'image'    =>'required|image|max:2048'
            ]);

    $image = $request->file('image');

    $new_name = rand() . '.' . $image->getClientOriginalExtension();

    $image->move(public_path('images'), $new_name);

    $form_data = array(
        'name'       =>   $request->name,
        'details'       =>   $request->details,
        'price'       =>   $request->price,
        'categorie_id'       =>   $request->categorie_id,
        'image'            =>   $new_name,
        'user_id' =>$id

    );

    produit::create($form_data);

    return redirect('produit')->with('success', 'Votre produit est ajouté avec sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('back.restaurant.produit.show',compact('produit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        $id=Auth::user()->id;
        $produits= DB::table('produits')->where('user_id' ,'=' ,$id)->get();
        $categories= DB::table('categories')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.produit.edit', compact(['categories','produit']));
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
                'name'    =>  'required',
                'details'     =>  'required',
                'price'        =>  'required',
                'categorie_id'     =>  'required',
                'image'    =>  'image|max:2048'

            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);
   

        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'details'     =>  'required',
                'price'     =>  'required',
                'categorie_id' => 'required',
                'image' => 'required'
            ]);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'details'        =>   $request->details,
            'price'        =>   $request->price,
            'categorie_id'        =>   $request->categorie_id,
            'image'            =>   $image_name

        );
  
        produit::whereId($id)->update($form_data);

        return redirect('produit')->with('success', 'Votre Porduit est modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect('/produit');
    }
}
