<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'IndexController@index');
Route::get('/APropos', 'AboutController@index');
Route::get('/faqs', 'FaqsController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/restaurants', 'ListeRestoFrontController@index');
Route::get('/Searchrestaurants', 'ListeRestoFrontController@search')->name('restaurant.search');
Route::get('/restaurant-details/{id}','ListeRestoFrontController@details');
Route::post('/','IndexController@store')->name('feedapp.store');

Route::get('/loginC', 'InscriptionController@index');


Auth::routes(['verify'=>true]);


Route::group(['middleware' =>['auth','RestaurantMiddleware']], function(){

    Route::get('/resto', 'RestaurantController@index');
    Route::get('/infos','InfosController@index');
    Route::post('/infos/update/{id}','InfosController@update');
    Route::resource('categorie','CategorieController');
    Route::resource('commandes','CommandeRestoController');
    Route::resource('produit','ProduitController');
    Route::get('/feedback','FeedsController@indexResto');


});

Route::group(['middleware' =>['auth','ClientMiddleware']], function(){
    Route::get('/mon-profil', 'ProfilClientController@index')->name('monprofil');
    Route::post('/profil/update/{id}','ProfilClientController@update');
    Route::get('/details-commande','CommandeController@index');
    Route::post('/details-commande/store','CommandeController@store')->name('commande.store');
    Route::get('/fini-commande','CommandeController@fini');
    Route::get('/paiement','PaiementController@index');
    Route::post('/fini-commande','FeedsController@store')->name('feed.store');

});

Route::group(['middleware' =>['auth','AdminMiddleware']], function(){
    Route::get('/dash','DashController@index');
    Route::get('/ListeResto','ListeRestoController@index');
    Route::get('/ListeLivreurs','ListeLivreurController@index');
    Route::resource('commentaire','DashController');


});


Route::group(['middleware' =>['auth','LivreurMiddleware']], function(){
    Route::get('/livreur', function () {
        return view('back.livreur.index');
    });
    Route::get('/infosLivreur','InfosLivreurController@index');
    Route::post('/infosLivreur/update/{id}','InfosLivreurController@update');
});

Route::get('/registerLivreur', 'RegisterLivreurController@index')->name('registerLivreur');
Route::post('/registerLivreur', 'RegisterLivreurController@create')->name('registerLivreur');

Route::get('/registerRestaurant', 'RegisterRestoController@index')->name('registerRestaurant');
Route::post('/registerRestaurant', 'RegisterRestoController@create')->name('registerRestaurant');

Route::get('/registerClient', 'RegisterClientController@index')->name('registerClient');
Route::post('/registerClient', 'RegisterClientController@create')->name('registerClient');

Route::get('/home', 'HomeController@index')->name('home');


/*Cart routes */
Route::post('/panier/ajouter','CartController@store')->name('cart.store');
Route::get('/mon-panier','CartController@index')->name('cart.index');
Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');
Route::patch('/panier/{produit}', 'CartController@update')->name('cart.update');



