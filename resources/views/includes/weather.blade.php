


<div class="weather-container">

    <style>
        .weather-container {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: auto; /* Középre igazítás */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>

    <h2>Időjárás</h2>

    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @elseif(isset($weatherData) && isset($weatherData['main']))
        <p><strong>Hőmérséklet:</strong> {{ $weatherData['main']['temp'] }}°C</p>
        <p><strong>Napkelte:</strong> {{ date('H:i', $weatherData['sys']['sunrise']) }}</p>
        <p><strong>Napnyugta:</strong> {{ date('H:i', $weatherData['sys']['sunset']) }}</p>
    @else
        <p>Nincs elérhető időjárási adat.</p>
    @endif
</div>
