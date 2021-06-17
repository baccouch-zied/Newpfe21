<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Produit;
use Cart;
use UserRestaurant;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.panier');

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

        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->produit_id;
        });

        if($duplicata->isNotEmpty()){
            return redirect('/restaurants')->with('success', 'le produit est deja ajouté');
        }

        $produit = Produit::find($request->produit_id);
        Cart::add($produit->id, $produit->name, 1,$produit->price)
            ->associate('App\Produit');

        return redirect('/restaurants')->with('success', 'le produit a bien été ajouté a votre panier');

       /* $produit = Produit::findOrFail($request->id);

        Cart::add($request->id, $request->name, 1, $request->price)
        ->associate('App\Produit');

        return redirect('/restaurants')->with('success', 'le produit a bien été ajoué a votre panier');*/
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateqty(Request $request)
    {

        $rowId = $request['abc'];
        Cart::update($rowId,$request->quantity);
        return response()->json(['success' => $request->abc]);
       /* $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);*/
    }

    public function increaseQuantity($rowId)
    {
        $produit = Cart::get($rowId);
        $qty = $produit->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)
    {
        $produit = Cart::get($rowId);
        $qty = $produit->qty - 1;
        Cart::update($rowId,$qty);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect('/mon-panier')->with('success', 'le produit est supprimé de votre panier');
    }
}
