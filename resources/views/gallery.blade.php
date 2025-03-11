@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h1 style="text-align: center">Galéria</h1>

        <div class="container mb-5 mt-4">
          <div class="row">
            <!-- Kártya 1 -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="images/archiv2.jpg" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Archív képek</p>
                </div>
              </div>
            </div>
            
            <!-- Kártya 2 -->
            <div class="col-12 col-sm-6 col-md-4">
              <a class="card" style="width: 18rem;">
                <img src="images/hetkoznap1.jpg" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">"Szürke" Hétköznapok</p>
                </div>
              </a>
            </div>
            
            <!-- Kártya 3 -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 3</p>
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
                <img src="" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 4</p>
                </div>
              </div>
            </div>
            
            <!-- Kártya 2 -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 5</p>
                </div>
              </div>
            </div>
            
            <!-- Kártya 3 -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 6</p>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>

</div>


    
@endsection

