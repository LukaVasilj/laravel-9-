<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/actor",ActorController::class);
Route::resource("/country",CountryController::class);
Route::resource("/city", CityController::class);

// Additional routes for AJAX functionality
Route::delete('/city/{id}', [CityController::class, 'destroy'])->name('city.destroy');
