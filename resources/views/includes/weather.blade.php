<div class="weather-container">
    <div class="weather-content">
        <h3>Időjárás Kondorfa</h3>
        @if(isset($weatherData))
            <p>Hőmérséklet: {{ $weatherData['current']['temp_c'] }}°C</p>
            <p>Állapot: {{ $weatherData['current']['condition']['text'] }}</p>
            <img src="{{ $weatherData['current']['condition']['icon'] }}" alt="Weather icon">
        @else
            <p>Nem sikerült betölteni az időjárási adatokat.</p>
        @endif
    </div>
</div>
