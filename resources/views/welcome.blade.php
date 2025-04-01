@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')
<div class="container-fluid p-0">
    <div class="position-relative w-100 hero-box" style="overflow: hidden;">
        <div class="position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;" id="overlay"></div>

        <img src="images/falu1.jpg" class="w-100 h-100 object-fit-cover" style="object-position: center 25%;" alt="Kép">

        <div class="position-absolute text-white w-100 text-center" 
             style="top: 50%; left: 50%; transform: translate(-50%, -50%);" id="text-overlay">
            Üdvözöljük Kondorfa weblapján!
       </div>
    </div>
</div>

<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">



    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center;">
        
      <div> 
        
        <div class="d-flex justify-content-center gap-3 my-4">
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="collapse"
            data-bs-target="#idojarasCollapse"
            aria-expanded="false"
            aria-controls="idojarasCollapse"
          >
            Időjárás
          </button>
        
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="collapse"
            data-bs-target="#naptarCollapse"
            aria-expanded="false"
            aria-controls="naptarCollapse"
          >
            Naptár
          </button>
        </div>
        
        @include('includes.weather', ['weatherData' => $weatherData ?? null, 'error' => $error ?? null])</div>
        <div class="d-flex justify-content-center mt-5">
        @include('includes.calendar')
        </div>
        <div id="event-details" style="margin-top: 20px; text-align: center;"></div>



        <hr>

        <h1>Aktuális híreink</h1>
        
        <div class="card my-4">
            <div class="card-header">
              Kürtöskalácsos Kondorfán
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <img src="images/news/03.11.jpg" class="img-fluid" alt="" srcset="">

                <footer class="blockquote-footer d-flex align-items-center  mt-2">
                    Közzétéve: 2025. március 11.
                  </footer>
              </blockquote>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-header">
              Nőnap
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Weöres Sándor: A NŐ <br>
                  “A nő: tetőtől talpig élet. <br>
                  A férfi: nagyképű kísértet. <br>
                  A nőé: mind, mely élő és halott, <br>
                  úgy, amint két-kézzel megfoghatod; <br>
                  a férfié: minderről egy csomó <br>
                  kétes bölcsesség, nagy könyv, zagyva szó…” <br>
                  🌹Nőnap alkalmából szeretettel köszöntjük a Hölgyeket, Lànyokat és Asszonyokat! 💐 <br>
                  Kondorfa Község Önkormányzata <br></p>

                  <img src="images/news/03.08.jpg" class="img-fluid" alt="" srcset="">

                  <footer class="blockquote-footer d-flex align-items-center  mt-2">
                    Közzétéve: 2025. március 8.
                  </footer>
              </blockquote>
            </div>
        </div>


    </div>

</div>


    
@endsection

