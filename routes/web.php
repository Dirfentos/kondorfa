<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/history', function () {
    return view('history');
})->name('history');


Route::get('/places', function () {
    return view('places');
})->name('places');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/associations', function () {
    return view('associations');
})->name('associations');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/gallery/archiv', function () {
    return view('archiv');
})->name('archiv');


Route::get('/programs', function () {
    return view('programs');
})->name('programs');