<div class="weather-widget">
    <h3>5 napos időjárás előrejelzés</h3>

    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @elseif(isset($weatherData) && isset($dailyForecast) && count($dailyForecast) > 0)
        <h4>Helyszín: {{ $weatherData['city']['name'] }}</h4>
        <table border="1">
            <thead>
                <tr>
                    <th>Dátum</th>
                    <th>Hőmérséklet (°C)</th>
                    <th>Leírás</th>
                    <th>Szél (m/s)</th>
                    <th>Ikon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dailyForecast as $forecast)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($forecast['dt_txt'])->format('Y-m-d H:i') }}</td>
                        <td>{{ $forecast['main']['temp'] }}°C</td>
                        <td>{{ ucfirst($forecast['weather'][0]['description']) }}</td>
                        <td>{{ $forecast['wind']['speed'] }} m/s</td>
                        <td>
                            <img src="https://openweathermap.org/img/wn/{{ $forecast['weather'][0]['icon'] }}.png" alt="Időjárás ikon">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nincs elérhető időjárási adat.</p>
    @endif
</div>
