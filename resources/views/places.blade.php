@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h3 style="text-align: center">Látnivalók</h3>

        <div class="container mb-5 mt-4">
            <div class="row">
              <!-- Kártya 1 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/56-os.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">'56-os emlékszobor</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 2 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/1.vh-s.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">1. Világháborús emlékmű</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 3 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/ferfifej2.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">Polyák Ferenc fafaragó művész egyik műve."Férfi fej"</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="container mb-5 mt-4">
            <div class="row">
              <!-- Kártya 1 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/kereszt1.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text">Falunkban több kereszttel is találkozhatnak, ez például a falutól kb 500m-re található Csörötnek irányába.</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 2 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/templom.jfif" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Településünk temploma </p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 3 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/kereszt3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Ez a kereszt településünk központjában található.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>    

    </div>

</div>


    
@endsection

