<?php

use App\Http\Controllers\ProduitController;
use App\Models\Produit;
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

Route::get('/', function () {
    // Produit::create([
    //     'nom' => 'Préssea Ananas',
    //     'prix' => 1000,
    //     'quantiteEnStock' => 150,
    //     'code' => 'PRESANA',
    //     'couleur' => '#12ffif',
    //     'etat' => true,
    // ]);
    return view('welcome');
})->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

Route::get('/well', function () {
    return view('welcomeclone');
})->name("welcome");

Route::resource('produit', ProduitController::class);
