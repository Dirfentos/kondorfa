@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center">

      <div class="text-center mt-5">

        <!-- Bevezető -->
        <h2>Lépjen velünk kapcsolatba</h2>
        <p class="lead w-75 mx-auto">Kérdése van? Írjon nekünk az alábbi űrlapon keresztül, vagy használja elérhetőségeinket!</p>

        <!-- Elérhetőségek -->
        <div class="my-4">
            <p><strong>Email:</strong> hivatal@kondorfa.hu | <strong>Telefon:</strong> +36 94 428 103</p>
        </div>

        <!-- Űrlap -->
        <form action="" method="post" class="mt-5">
          @csrf
          <div class="container">
              <div class="row justify-content-center mb-3">
                  <div class="col-md-4">
                      <input type="text" name="first_name" class="form-control" placeholder="Keresztnév" aria-label="First name">
                  </div>
                  <div class="col-md-4">
                      <input type="text" name="last_name" class="form-control" placeholder="Vezetéknév" aria-label="Last name">
                  </div>
              </div>
      
              <div class="row justify-content-center mb-3">
                  <div class="col-md-8">
                      <label for="email" class="form-label">Email cím</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="pl.: valaki@email.hu">
                  </div>
              </div>
      
              <div class="row justify-content-center mb-4">
                  <div class="col-md-8">
                      <label for="message" class="form-label">Üzenet</label>
                      <textarea name="message" id="message" class="form-control" rows="4" placeholder="Írd ide az üzeneted..."></textarea>
                  </div>
              </div>
      
              <div class="row justify-content-center">
                  <div class="col-md-8 text-center">
                      <button type="submit" class="btn btn-primary px-5">Küldés</button>
                  </div>
              </div>
          </div>
      </form>

        <!-- Térkép -->
        <div class="container text-center mt-5">
          <h3>Hol talál meg minket?</h3>
          <a href="https://www.google.com/maps/place/Polgármesteri+Hivatal+Kondorfa/@46.8964839,16.3929391,21z" target="_blank">
              <img src="{{ asset('images/kondorfa-map.png') }}" alt="Polgármesteri Hivatal Kondorfa térkép" class="img-fluid rounded shadow">
          </a>
          <p class="mt-2 small">Kattintson a térképre a megnyitáshoz a Google Maps-en</p>
      </div>
      
    </div>
      
    </div>

    </div>

</div>


    
@endsection

