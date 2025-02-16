@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    {{-- @include('includes.weather') <!-- Időjárás div --> --}}

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h3 style="text-align: center">Látnivalók</h3>

        <div class="container mb-5 mt-4">
            <div class="row">
              <!-- Kártya 1 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 2 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 3 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 2 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              
              <!-- Kártya 3 -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


    </div>

        {{-- @include('includes.weather') <!-- Időjárás div --> --}}

</div>


    
@endsection

