<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class WeatherController extends Controller
{
    public function getWeather()
    {
        Carbon::setLocale('hu'); // Magyar nyelv beállítása a dátumformázáshoz

        $city = "Kondorfa";
        $apiKey = env('OPENWEATHER_API_KEY');

        $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric&lang=hu";

        // API hívás
        $response = Http::get($url);

        if ($response->failed()) {
            return view('welcome', ['error' => 'Nem sikerült lekérni az időjárási adatokat.']);
        }

        $weatherData = $response->json();

        if (!isset($weatherData['list']) || !isset($weatherData['city'])) {
            return view('welcome', ['error' => 'Hibás API válasz.']);
        }

        // Csoportosítás dátum szerint
        $groupedForecasts = collect($weatherData['list'])->groupBy(function ($forecast) {
            return Carbon::parse($forecast['dt_txt'])->format('Y-m-d'); // Csak a dátumot vesszük
        });

        // Az első 3 nap kiválasztása és a minimum/maximum hőmérséklet kiszámítása
        $threeDayForecast = $groupedForecasts->take(3)->map(function ($forecasts) {
            $maxTemp = $forecasts->max('main.temp');
            $minTemp = $forecasts->min('main.temp');
            
            // Dátum formázása: "03-19 (Kedd)"
            $date = Carbon::parse($forecasts->first()['dt_txt'])->translatedFormat('m-d (l)');

            return [
                'date' => $date,
                'temp_min' => round($minTemp, 1), // Kerekített minimum hőmérséklet
                'temp_max' => round($maxTemp, 1), // Kerekített maximum hőmérséklet
            ];
        });

        return view('welcome', [
            'threeDayForecast' => $threeDayForecast,
            'sunrise' => isset($weatherData['city']['sunrise']) 
                            ? date('H:i', $weatherData['city']['sunrise']) 
                            : 'N/A',
            'sunset' => isset($weatherData['city']['sunset']) 
                            ? date('H:i', $weatherData['city']['sunset']) 
                            : 'N/A',
        ]);
    }
}
