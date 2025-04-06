<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class WeatherController extends Controller
{
    public function getWeather()
{
    Carbon::setLocale('hu'); // Magyar nyelv

    $city = "Kondorfa";
    $apiKey = env('OPENWEATHER_API_KEY');

    $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric&lang=hu";

    $response = Http::get($url);

    if ($response->failed()) {
        return view('welcome', ['error' => 'Nem sikerült lekérni az időjárási adatokat.']);
    }

    $weatherData = $response->json();

    if (!isset($weatherData['list']) || !isset($weatherData['city'])) {
        return view('welcome', ['error' => 'Hibás API válasz.']);
    }

    $groupedForecasts = collect($weatherData['list'])->groupBy(function ($forecast) {
        return Carbon::parse($forecast['dt_txt'])->format('Y-m-d');
    });

    // 3 napos előrejelzés
    $threeDayForecast = $groupedForecasts->take(3)->map(function ($forecasts) {
        $maxTemp = $forecasts->max('main.temp');
        $minTemp = $forecasts->min('main.temp');
        $date = Carbon::parse($forecasts->first()['dt_txt'])->translatedFormat('m-d (l)');
        return [
            'date' => $date,
            'temp_min' => round($minTemp, 1),
            'temp_max' => round($maxTemp, 1),
        ];
    });

    // Mai nap adatainak kiszedése (lehetőleg a dél körüli előrejelzésből)
    $todayDate = Carbon::today()->format('Y-m-d');

    $todayForecast = $groupedForecasts->get($todayDate);
    $noonForecast = $todayForecast?->firstWhere(function ($item) {
        return str_contains($item['dt_txt'], '12:00:00');
    });

    if (!$noonForecast && $todayForecast) {
        $noonForecast = $todayForecast->first(); // fallback
    }

    $today = null;
    if ($noonForecast) {
        $today = [
            'temp_min' => round($todayForecast->min('main.temp'), 1),
            'temp_max' => round($todayForecast->max('main.temp'), 1),
            'description' => $noonForecast['weather'][0]['description'],
            'icon' => $noonForecast['weather'][0]['icon'],
        ];
    }

    return view('welcome', [
    'threeDayForecast' => $threeDayForecast,
    'today' => $today,
    'sunrise' => isset($weatherData['city']['sunrise']) 
                    ? Carbon::createFromTimestamp($weatherData['city']['sunrise'])
                        ->setTimezone('Europe/Budapest')
                        ->format('H:i')
                    : 'N/A',
    'sunset' => isset($weatherData['city']['sunset']) 
                    ? Carbon::createFromTimestamp($weatherData['city']['sunset'])
                        ->setTimezone('Europe/Budapest')
                        ->format('H:i')
                    : 'N/A',
]);

}

}
