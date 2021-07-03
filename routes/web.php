<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoutiqueController;
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
    return view('login');
})->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

// Route::get('/login', function () {
//     return view('login');
// })->name("login");

// Route::post('/', ['UserController@loginUser']);

Route::resource('produit', ProduitController::class);

Route::resource('boutique', BoutiqueController::class);

Route::resource('user', UserController::class);
