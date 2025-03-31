<div class="text-center my-4">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#idojarasCollapse" aria-expanded="false" aria-controls="idojarasCollapse">
      Időjárás előrejelzés megnyitása
    </button>
  </div>
  

<div class="collapse" id="idojarasCollapse">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="container weather-container">
            @if(isset($error))
                <p style="color: red;">{{ $error }}</p>
            @elseif(isset($threeDayForecast) && count($threeDayForecast) > 0)
        
                <div class="row forecast-row gx-3 gy-3">
                    @foreach($threeDayForecast as $forecast)
                        <div class="col weather-box forecast-box">
                            <div class="weather-title">{{ $forecast['date'] }}</div>
                            <div class="weather-value">🌡 Min: {{ $forecast['temp_min'] }}°C</div>
                            <div class="weather-value">🔥 Max: {{ $forecast['temp_max'] }}°C</div>
                        </div>
                    @endforeach
                </div>
        
                <div class="row sun-row gx-3 gy-3 mt-3">
                    <div class="col weather-box sun-box">
                        <div class="weather-title">🌅 Napkelte</div>
                        <div class="weather-value">{{ $sunrise }}</div>
                    </div>
                    <div class="col weather-box sun-box">
                        <div class="weather-title">🌇 Napnyugta</div>
                        <div class="weather-value">{{ $sunset }}</div>
                    </div>
                </div>
        
            @else
                <p>Nincs elérhető időjárási adat.</p>
            @endif
        </div>
        
        
      </div>
    </div>
  </div>
</div>



