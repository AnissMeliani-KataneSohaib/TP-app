<?php

use App\Http\Controllers\TpController;
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

Route::get('/',TpController::class . "@Afficher" )->name('Afficher');
Route::post('/login',TpController::class . "@login" )->name('login');
Route::get('/produits',TpController::class .'@produits')->name('produits');
Route::get('/produit/{id}',TpController::class . '@show')
->name("show");
Route::delete("/produit/{id}", TpController::class."@destroy")->name("delete");
Route::get('/ajouter',TpController::class . "@ajouter")->name("ajouter");
Route::post('/store',TpController::class . '@store')->name("store");
