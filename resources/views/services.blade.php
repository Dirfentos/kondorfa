@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center">

        <h1 style="text-align: center">Szolgáltatások</h1> 

        <div class="card">
            <div class="card-header">
              Orvosi rendelés
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hétfő: 12:00 – 13:30 <br>
                    Kedd: 8:00 - 10:00 <br>
                    Csütörtök: 12:00 - 13:00 <br>
                </p>
                <footer class="blockquote-footer">Háziorvos: Dr. Benczúr Barbara <br> 
                        Tel.:+36304787316 <br>
                        Asszisztens: Györkéné Zelles Eszter <br>
                        Tel.:+36303686784
                </footer>
              </blockquote>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Könyvtár
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hétfő: 16:00 – 19:00 <br>
                  Kedd: 15:00 - 18:00 <br>
                  Szerda: ZÁRVA <br>
                  Csütörtök: 16:00 - 19:00 <br>
                  Péntek: 15:00 - 20:00 <br>
                </p>
              </blockquote>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Önkormányzat
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hétfő: 9:00 – 16:00 <br>
                  Kedd: 9:00 - 16:00 <br>
                  Szerda: ZÁRVA <br>
                  Csütörtök: 9:00 - 16:00 <br>
                  Péntek: 9:00 - 13:30 
              </p>
              <footer class="blockquote-footer">
                Tel.:+3694428103 <br>
                Email:hivatal@kondorfa.hu
              </footer>

              </blockquote>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Posta
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hétfő - Péntek:<br>
                  7:30 – 9:30 <br>
                  13:30 - 15:30 <br>
              </p>                
              </blockquote>
            </div>
          </div>

    </div>

</div>


    
@endsection

