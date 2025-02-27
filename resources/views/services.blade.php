@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center">

        <h3 style="text-align: center">Szolgáltatások</h3> 

        <div class="card">
            <div class="card-header">
              Orvosi rendelés
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Hétfő: 12:00 – 13:30 <br>
                    Kedd: 8:00 - 10:00 <br>
                    Csütörtök: 12:00-13:00 <br>
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
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>

    </div>

</div>


    
@endsection

