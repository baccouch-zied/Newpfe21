<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


    Route::post('/login', 'Api\AuthController@login')->name('login');
    Route::post('/register', 'Api\AuthController@register');
    Route::get('/logout', 'Api\AuthController@logout');
    Route::get('/user', 'Api\AuthController@user');

//Route::post('/register','Api\AuthController@register');
//Route::post('/registerLivreur','Api\AuthController@registerLivreur');
//Route::post('/registerClient','Api\AuthController@registerClient');
//Route::post('/login','Api\AuthController@login');
//Route::post('/logout','Api\AuthController@logout');

Route::get('/categorie','Api\CategorieController@index');
Route::get('/produit','Api\ProduitController@index');
Route::get('/ListeResto','Api\ListeRestoController@index');
Route::get('/restodetails/{id}','Api\DetailsController@afficheCat');
Route::get('/restodetailsProd/{id}','Api\DetailsController@afficheProd');
Route::get('/monprofil','Api\Profilcontroller@index');



