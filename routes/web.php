<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AchatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\RendezVousController;
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
Route::resource('rendezvous', RendezVousController::class);
Route::resource('produits', ProduitController::class);