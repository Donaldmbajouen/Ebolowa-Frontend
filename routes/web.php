<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;

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
Route::post('logout',[UserController::class,'logout'])->name('logout')
    ->middleware('auth:sanctum');

// Routes de l'utilisateur simple

Route::get('/', [UserController::class, 'main_user'])->name('accueil');
Route::get('/Site_touristique', [UserController::class, 'site_touristique'])->name('site_touristique');
Route::get('/Reserver_site_touristique', [UserController::class, 'reserver_site_touristique'])->name('reserver_une_visite');
Route::get('/Historique', [UserController::class, 'historique'])->name('historique');
Route::get('/Hotels', [UserController::class, 'Hotels'])->name('hotels');


// Routes de l'Admin debut


    Route::group(['prefix'=>'admin', 'middleware' => 'admin_principal'], function(){

        Route::get('/', [AdminController::class, 'dashboard'])->name('Admin');

        Route::get('/hotels', [HotelController::class, 'hotels'])-> name('Adminhotels');

        Route::get('/AjouterHotels', [HotelController::class, 'AjouterHotels'])-> name('AjouterHotels');
        Route::post('/Hotels', [HotelController::class, 'create'])-> name('AjoutHotels');
        Route::get('/Hotels/{id}', [HotelController::class, 'show']);
        Route::put('/Hotels/{id}', [HotelController::class, 'update']);
        Route::delete('/Hotels/{id}', [HotelController::class, 'destroy']);

        Route::get('/Voirhotels', [AdminController::class, 'Voirhotels'])-> name('Voirhotels');
        Route::get('/SiteT', [AdminController::class, 'SiteT'])-> name('AdminSiteT');
        Route::get('/AjouterSiteT', [AdminController::class, 'AjouterSiteT'])-> name('AjouterSiteT');

        // Route::get();
    });
