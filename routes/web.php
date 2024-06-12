<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\HebergementController;
use App\Http\Controllers\OffreTouristiqueController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TouristeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::resource('user', UserController::class);

route::resource('destination', DestinationController::class);
route::resource('hebergement', HebergementController::class);
route::resource('touriste', TouristeController::class);

route::resource('offre', OffreTouristiqueController::class);
route::resource('reservation', ReservationController::class);
route::resource('avis', AvisController::class);




