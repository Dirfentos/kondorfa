<style>
    .weather-container {
        font-family: Arial, sans-serif;
        width: 100%;
        max-width: 900px;
        margin: 20px auto;
        padding: 15px;
        border: 2px solid #007bff;
        border-radius: 10px;
        background-color: #f8f9fa;
        display: flex;
        justify-content: space-around;
        align-items: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .weather-box {
        flex: 1;
        text-align: center;
        padding: 10px;
        border-right: 1px solid #ddd;
    }

    .weather-box:last-child {
        border-right: none;
    }

    .weather-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .weather-value {
        font-size: 16px;
        font-weight: normal;
    }
</style>

<div class="weather-container">
    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @elseif(isset($threeDayForecast) && count($threeDayForecast) > 0)
        @foreach($threeDayForecast as $forecast)
            <div class="weather-box">
                <div class="weather-title">{{ $forecast['date'] }}</div>
                <div class="weather-value">🌡 Min: {{ $forecast['temp_min'] }}°C</div>
                <div class="weather-value">🔥 Max: {{ $forecast['temp_max'] }}°C</div>
            </div>
        @endforeach
        <div class="weather-box">
            <div class="weather-title">🌅 Napkelte</div>
            <div class="weather-value">{{ $sunrise }}</div>
        </div>
        <div class="weather-box">
            <div class="weather-title">🌇 Napnyugta</div>
            <div class="weather-value">{{ $sunset }}</div>
        </div>
    @else
        <p>Nincs elérhető időjárási adat.</p>
    @endif
</div>


