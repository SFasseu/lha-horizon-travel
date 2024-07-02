<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\HebergementController;
use App\Http\Controllers\OffreTouristiqueController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TouristeController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::resource('user', UserController::class);

route::resource('destination', DestinationController::class);
route::resource('hebergement', HebergementController::class);
route::resource('touriste', TouristeController::class);
route::resource('agence', AgenceController::class);

route::resource('offre', OffreTouristiqueController::class);
route::resource('reservation', ReservationController::class);
route::resource('avis', AvisController::class);




