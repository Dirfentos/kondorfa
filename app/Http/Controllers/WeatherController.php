<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = env('WEATHER_API_KEY'); // API kulcs betöltése az .env fájlból
        $city = 'Kondorfa'; // Fix város
        $url = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city}&aqi=no";

        $response = Http::get($url);

        if ($response->successful()) {
            $weatherData = $response->json(); // JSON válasz átalakítása tömbbé
            return view('weather', compact('weatherData'));
        }

        return view('weather', ['error' => 'Nem sikerült lekérni az időjárási adatokat.']);

    }
}

