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