<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route de l'authentification

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//route de l'authentification

Route::post('register',[UserController::class,'register'])->name('register');
Route::get('register',[UserController::class,'showregisterForm']);

Route::post('login',[UserController::class,'login'])->name('login');
Route::get('/login',[UserController::class,'showLoginForm']);

Route::post('logout',[UserController::class,'logout'])
    ->middleware('auth:sanctum');

// Routes de l'utilisateur simple

Route::get('/', [UserController::class, 'main_user'])->name('accueil');
Route::get('/Site_touristique', [UserController::class, 'site_touristique'])->name('site_touristique');
Route::get('/Reserver_site_touristique', [UserController::class, 'reserver_site_touristique'])->name('reserver_une_visite');
Route::get('/Historique', [UserController::class, 'historique'])->name('historique');
Route::get('/Hotels', [UserController::class, 'Hotels'])->name('hotels');


// Routes de l'Admin debut

Route::get('/Admin', [AdminController::class, 'dashboard'])-> name('Admin');
Route::get('/structures', [AdminController::class, 'structures'])-> name('structures');
Route::get('/AjouterHotels', [AdminController::class, 'AjouterHotels'])-> name('AjouterHotels');

// fin routes de l'Admin
