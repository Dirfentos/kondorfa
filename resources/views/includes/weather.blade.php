<div class="collapse" id="idojarasCollapse">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="container weather-container">
            @if(isset($error))
    <p style="color: red;">{{ $error }}</p>
@elseif(isset($today))
<div class="today-weather-box">
  <div class="weather-icon">
    <img src="https://openweathermap.org/img/wn/{{ $today['icon'] }}@2x.png" style="filter: grayscale(100%) brightness(0); width: 80px; height: 80px;" alt="{{ $today['description'] }}">
  </div>
  <div class="weather-info">
    <div class="temp-range">
      Min: {{ $today['temp_min'] }}°C <br>
      Max: {{ $today['temp_max'] }}°C
    </div>
    <div class="description mt-1">
      {{ ucfirst($today['description']) }}
    </div>
    <div class="sun-times mt-2">
      🌅 Napkelte: {{ $sunrise }}<br>
      🌇 Napnyugta: {{ $sunset }}
    </div>
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



