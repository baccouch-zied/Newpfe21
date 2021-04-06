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

Route::post('/registerResto','Api\AuthController@registerResto');
Route::post('/registerLivreur','Api\AuthController@registerLlivreur');
Route::post('/login','Api\AuthController@login');

Route::get('/categorie','Api\CategorieController@index');
Route::get('/produit','Api\ProduitController@index');
