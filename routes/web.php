<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AchatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\Rendez_vousController;
use App\Http\Controllers\ProduitController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('achats', AchatController::class);
Route::resource('clients', ClientController::class);
Route::resource('commercials', CommercialController::class);
Route::resource('prospects', ProspectController::class);
Route::resource('rendezvous', Rendez_vousController::class);
Route::resource('produits', ProduitController::class);

Route::get('/search-achat', 'App\Http\Controllers\AchatController@search');
Route::get('/search-client', 'App\Http\Controllers\ClientController@search');
Route::get('/search-commercial', 'App\Http\Controllers\CommercialController@search');
Route::get('/search-prospect', 'App\Http\Controllers\ProspectController@search');
Route::get('/search-rendez_vous', 'App\Http\Controllers\Rendez_vousController@search');
Route::get('/search-produit', 'App\Http\Controllers\ProduitController@search');