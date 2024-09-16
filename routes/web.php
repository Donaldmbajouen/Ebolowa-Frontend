<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminHotelController;

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
    Route::get('/reservation', [UserController::class, 'reservation'])->name('reservation');



// // Routes de l'Admin debut


    Route::group(['prefix'=>'admin', 'middleware' => 'admin_principal'], function(){//

        Route::get('/', [AdminController::class, 'dashboard'])->name('Admin');

     // route Admin de l'hotel
        Route::get('/hotels', [HotelController::class, 'index'])-> name('Adminhotels');

        Route::get('/AjouterHotels', [HotelController::class, 'AjouterHotels'])-> name('AjouterHotels');
        Route::post('/Hotels', [HotelController::class, 'create'])-> name('AjoutHotels');
        Route::get('/Hotels/{id}/show', [HotelController::class, 'show'])->name('HotelShow');
        Route::get('/Hotels/{id}', [HotelController::class, 'showupdate'])->name('GUpdateHotel');
        Route::post('/Hotels/{id}', [HotelController::class, 'Postupdate'])->name('PostUpdateHotel');
        Route::delete('/Hotels/{id}', [HotelController::class, 'destroy'])->name('DeltHotel');


    //routes Admin du Site
        // Route::get('/Voirhotels', [AdminController::class, 'Voirhotels'])-> name('Voirhotels');
        Route::get('site/{id}/update', [AdminController::class, 'ShowUpdate'])->name('SiteUpdate');
        Route::get('/Site-touristiques', [AdminController::class, 'index'])->name('AdminSiteT');
        Route::get('/AjouterSiteT', [AdminController::class, 'AjouterSiteT'])->name('AjouterSiteT');
        Route::post('/AjouterSiteT/create', [AdminController::class, 'create'])->name('PostAddSiteT');
        Route::get('/site-touristique/{id}', [AdminController::class, 'show'])->name('show_site');


    //route users de l'admingit branch
        Route::get('/users', [AdminUserController::class, 'index'])-> name('users');
        Route::post('users/create', [AdminUserController::class, 'store'])-> name('PostAddUsers');
        Route::get('users/create', [AdminUserController::class, 'showform'])-> name('AddUsers');
        Route::post('users/delete/{id}', [AdminUserController::class, 'destroy'])->name('UserDelt');

        //Route::get('users/{id}', [AdminUserController::class, 'show']);

        Route::get('users/{id}/update', [AdminUserController::class, 'ShowUpdate'])->name('UserUpdate');
        Route::post('post/users/{id}', [AdminUserController::class, 'update'])->name('PostUserUpdate');
        // Route::post('users/{id}', [AdminUserController::class, 'destroy'])->name('UserDelt');
    });

//Routes de l'Admin hotels
Route::group(['prefix'=>'admin-secondaire', 'middleware' => 'admin_principal'], function(){
    Route::get('hotels', [AdminHotelController::class, 'index'])->name('AdminHotel');


});


//Routes de l'Admin Site touristique

