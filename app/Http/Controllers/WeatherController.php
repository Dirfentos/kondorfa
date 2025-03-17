<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $city = "Kondorfa";
        $apiKey = env('OPENWEATHER_API_KEY');

        if (!$apiKey) {
            return view('weather', ['error' => 'API-kulcs nem található!']);
        }

        $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric&lang=hu";

        $response = Http::get($url);

        if ($response->failed()) {
            return view('weather', ['error' => 'Nem sikerült lekérni az időjárási adatokat.']);
        }

        $weatherData = $response->json();

        if (!isset($weatherData['list']) || !isset($weatherData['city'])) {
            return view('weather', ['error' => 'Hibás API válasz.']);
        }

        // Csoportosítás napok szerint
        $groupedForecasts = collect($weatherData['list'])->groupBy(function ($forecast) {
            return Carbon::parse($forecast['dt_txt'])->format('Y-m-d'); // Csak a dátumot vesszük
        });

        // A legközelebbi dél körüli időpont kiválasztása (9:00 - 15:00 között)
        $dailyForecast = $groupedForecasts->map(function ($forecasts) {
            return $forecasts->firstWhere(function ($forecast) {
                $hour = (int) Carbon::parse($forecast['dt_txt'])->format('H');
                return $hour >= 9 && $hour <= 15;
            }) ?? $forecasts->first(); // Ha nincs megfelelő időpont, az első elérhetőt választjuk
        })->take(5); // Csak az első 5 napot vesszük

        // Ellenőrizzük, hogy van-e bármilyen adat
        if ($dailyForecast->isEmpty()) {
            return view('weather', ['error' => 'Nincs elérhető időjárási adat.']);
        }

        return view('weather', [
            'dailyForecast' => $dailyForecast,
            'weatherData' => $weatherData
        ]);
    }
}
