<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $city = "Kondorfa"; // A település, amelynek az időjárását lekérjük
        $apiKey = env('OPENWEATHER_API_KEY'); // Az API-kulcs beolvasása az .env fájlból

        // OpenWeather API URL beállítása
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=hu";

        // API hívás és válasz feldolgozása
        $response = Http::get($url);

        if ($response->failed()) {
            return view('welcome', ['error' => 'Nem sikerült lekérni az időjárási adatokat.']);
        }

        $weatherData = $response->json();

        if (!isset($weatherData['main']) || !isset($weatherData['weather'])) {
            return view('welcome', ['error' => 'Hibás API válasz.']);
        }

        return view('welcome', ['weatherData' => $weatherData]);
    }
}
