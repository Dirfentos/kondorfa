@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h1 style="text-align: center">Archív</h1>

        <a href="{{ route('gallery') }}" class="btn btn-outline-primary">Vissza</a>

        <div class="container py-5">
          <div class="row">
              @foreach ($imageFiles as $image)
                  <div class="col-12 col-sm-6 col-md-4 mb-4">
                      <div class="card" style="width: 18rem;">
                          <img src="{{ asset('images/archiv/' . basename($image)) }}" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" alt="{{ basename($image) }}" data-toggle="modal" data-target="#imageModal" data-image="{{ asset('images/archiv/' . basename($image)) }}">
                          <div class="card-body">
                              <p class="card-text">{{ basename($image) }}</p>
                              <a href="{{ route('archiv') }}" class="stretched-link"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>
        
      <!-- Modal -->
      <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="Nagy kép">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
        </div>
      </div>


    </div>

</div>




    
@endsection

