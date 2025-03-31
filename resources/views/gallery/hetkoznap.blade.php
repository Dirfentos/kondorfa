@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <a href="{{ route('gallery') }}" class="btn btn-outline-primary">Vissza</a>
        
        <h1 style="text-align: center">Hétköznapok</h1>

        <div class="container py-5">
            <div class="row">
                @foreach ($imageFiles as $index => $image)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/hetkoznap/' . basename($image)) }}" 
                                 class="card-img-top modal-image" 
                                 style="width: 100%; height: 300px; object-fit: cover;" 
                                 alt="{{ basename($image) }}" 
                                 data-bs-toggle="modal" 
                                 data-bs-target="#imageModal" 
                                 data-image="{{ asset('images/hetkoznap/' . basename($image)) }}"
                                 data-image-index="{{ $index }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Hétköznapok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <button id="prevButton" class="btn btn-secondary position-absolute start-0 top-50 translate-middle-y" style="z-index: 1055;">&#10094;</button>
                        <img id="modalImage" src="" class="img-fluid" alt="Nagyított kép">
                        <button id="nextButton" class="btn btn-secondary position-absolute end-0 top-50 translate-middle-y" style="z-index: 1055;">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>   
      
      <style>
          .modal-body {
              text-align: center;
          }
      
          #modalImage {
              width: 100%;
              height: auto;
              max-height: 150vh; /* Növelt magasság */
              object-fit: contain;
          }
      </style>

    </div>

</div>




    
@endsection

