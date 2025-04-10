<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

Route::get('/events/{year}/{month}', [EventController::class, 'getEventsByMonth']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [WeatherController::class, 'getWeather'])->name('welcome');


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

Route::get('/gallery/archiv', [GalleryController::class, 'archiv'])->name('gallery.archiv');

Route::get('/gallery/hetkoznap', [GalleryController::class, 'hetkoznap'])->name('gallery.hetkoznap');

Route::get('/gallery/kereszt', [GalleryController::class, 'kereszt'])->name('gallery.kereszt');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

// routes/web.php
Route::get('/kapcsolat', function () {
    return view('contact');
})->name('contact');



Route::post('/kapcsolat', [ContactController::class, 'contact'])->name('contact.send');



