<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route pour afficher tous les restaurants
Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index']);

// Route pour afficher un restaurant spécifique
Route::get('/restaurants/show/{id}', [App\Http\Controllers\RestaurantController::class, 'show']);

// Route pour créer un nouveau restaurant
Route::get('/restaurants/create', [App\Http\Controllers\RestaurantController::class, 'create']);

Route::post('/restaurants', [App\Http\Controllers\RestaurantController::class, 'store']);


