@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center">

        <h1 style="text-align: center">Programajánlók</h1>   
        
        <h3 style="text-align: center" class="mt-5">Március</h3>

        <div class="card my-4">
            <div class="card-header">
              Tabata és HIIT Edzés
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <img src="images/news/03.16.jpg" alt="" srcset="">

                <footer class="blockquote-footer d-flex align-items-center">
                  Közzétéve: 2025. március 16.
                </footer>
              </blockquote>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-header">
              Farsangi bál
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                  Farsangi bálba hív a három egyesület! <br>
                  A Kondorfa SE hivatalos oldala ,Önkéntes Tűzoltó Egyesület Kondorfa és a Kondorfáért Egyesület sok szeretettel meghívja Önt és kedves családját a március 1.-n tartandó Farsangi mulatságba!🎉🤹🏻‍♂️🪗🪄💃🏻 <br>
                  Mindenkit Szeretettel Várunk!
                </p>

                  <img src="images/news/01.21.jpg" alt="" srcset=""> <br>

                  <footer class="blockquote-footer d-flex align-items-center">
                    Közzétéve: 2025. január 21.
                  </footer>
              </blockquote>
            </div>
        </div>

    </div>

</div>


    
@endsection

