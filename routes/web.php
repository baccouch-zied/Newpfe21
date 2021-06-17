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
Route::get('/', 'IndexController@index')->name('index');
Route::get('/APropos', 'AboutController@index');
Route::get('/faqs', 'FaqfrontController@index');
Route::get('/contact', 'ContactController@create');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/restaurants', 'ListeRestoFrontController@index');
Route::get('/Searchrestaurants', 'ListeRestoFrontController@search')->name('restaurant.search');
Route::get('/restaurant-details/{id}','ListeRestoFrontController@details');
Route::post('/','IndexController@store')->name('feedapp.store');

Route::get('/loginC', 'InscriptionController@index');


Auth::routes(['verify'=>true]);


Route::group(['middleware' =>['auth','RestaurantMiddleware']], function(){

    Route::get('/resto', 'RestaurantController@index')->name('resto');
    Route::get('/infos','InfosController@index');
    Route::post('/infos/update/{id}','InfosController@update');
    Route::resource('categorie','CategorieController');
    Route::resource('commandes','CommandeRestoController');
    Route::resource('produit','ProduitController');
    Route::get('/feedback','FeedsController@indexResto');
    Route::get('/statistiques/{year}','StatisticsController@__invoke');
    Route::resource('accepter','AccepterCommandeController');
    Route::resource('rejeter','RejeterCommandeController');
    Route::post('/command/livreur', 'EnvoyerCommande@envoi')->name('handleAffectCommandLivreur');
    Route::get('/listelivreurs', 'RestaurantController@liste');

});

Route::group(['middleware' =>['auth','ClientMiddleware']], function(){
    Route::get('/mon-profil', 'ProfilClientController@index')->name('mon-profil');
    Route::post('/profil/update/{id}','ProfilClientController@update');
    Route::get('/details-commande','CommandeController@index');
    Route::post('/details-commande/store','CommandeController@store')->name('commande.store');
    Route::get('/fini-commande','CommandeController@create');
    Route::get('stripe', 'StripePaymentController@index');
    Route::post('payment-process', 'StripePaymentController@process');
    Route::get('/feedbackclient','CommandeController@feedclient');
    Route::post('/fini-commande','FeedsController@store')->name('feed.store');

});

Route::group(['middleware' =>['auth','AdminMiddleware']], function(){
    Route::get('/dash','DashController@index')->name('dash');;
    Route::resource('ListeResto','ListeRestoController');
    Route::resource('ListeLivreur','ListeLivreurController');
    Route::resource('ListeClients','ListeClientController');
    Route::resource('ListeContact', 'ContactController');
    Route::resource('commentaire','CommentaireController');
    Route::resource('faq','FaqController');

    Route::post('/validate/store', 'ConfirmationController@update')->name('validate');
});


Route::group(['middleware' =>['auth','LivreurMiddleware']], function(){
    Route::get('/livreur', 'LivreurController@index')->name('livreur');
    Route::get('/infosLivreur','InfosLivreurController@index');
    Route::post('/infosLivreur/update/{id}','InfosLivreurController@update');
    Route::resource('commandesLiv','CommandeLivController');
    Route::resource('accepterLiv','AccepterCommandeLivController');
    Route::resource('rejeterLiv','RejeterCommandeLivController');
    Route::resource('livrer','LivrerCommandeController');

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
Route::post('/panier/{produit}', 'CartController@update')->name('cart.update');
Route::post('/mon-panier/update/qty/produit','CartController@updateqty');
Route::post('/update/{rowId}','CartController@increaseQuantity')->name('cart.update1');
Route::post('/update2/{rowId}','CartController@decreaseQuantity')->name('cart.update2');


