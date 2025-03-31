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
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center">
              <a href="{{ route('gallery.archiv') }}" class="card" style="width: 18rem; text-decoration: none; color: inherit;">
                <img src="images/archiv2.jpg" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="Archív képek">
                <div class="card-body">
                  <p class="card-text">Archív képek</p>
                </div>
              </a>
            </div>
            
            
            <!-- Kártya 2 -->
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center">
              <a href="{{ route('gallery.hetkoznap') }}" class="card" style="width: 18rem; text-decoration: none; color: inherit;">
                <img src="images/hetkoznap1.jpg" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="Hétköznapok">
                <div class="card-body">
                  <p class="card-text">"Szürke" Hétköznapok</p>
                </div>
              </a>
            </div>
            
            <!-- Kártya 3 -->
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center mx-auto">
              <a href="{{ route('gallery.kereszt') }}" class="card" style="width: 18rem; text-decoration: none; color: inherit;">
                <img src="images/kereszt1.jpg" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="Kereszt képek">
                <div class="card-body">
                  <p class="card-text">Keresztek</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="container mb-5 mt-4">
          <div class="row">
            <!-- Kártya 1 -->
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="images/kerdojel.jfif" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 4</p>
                </div>
              </div>
            </div>
            
            <!-- Kártya 2 -->
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="images/kerdojel.jfif" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
                <div class="card-body">
                  <p class="card-text">Képek 5</p>
                </div>
              </div>
            </div>
            
            <!-- Kártya 3 -->
            <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center mx-auto">
              <div class="card" style="width: 18rem;">
                <img src="images/kerdojel.jfif" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="">
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

