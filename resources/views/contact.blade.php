@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px; text-align: center">

      <div class="text-center mt-5">
        <div class="mb-5">
            <h4>Bármi problémája van, vegye fel velünk a kapcsolatot:</h4>
        </div>
    
    
        <form action="" method="post">
            <div class="mb-3 w-50 mx-auto">
                <label for="exampleFormControlInput1" class="form-label">Email cím</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email cím">
            </div>
    
            <div class="mb-3 w-50 mx-auto">
                <label for="exampleFormControlTextarea1" class="form-label">Üzenet:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Üzenet"></textarea>
            </div>
    
            <div class="col-auto">
              <a href="{{ route('contact') }}" class="btn btn-primary mb-3">Küldés</a>

            </div>
        </form>
    </div>

    </div>

</div>


    
@endsection

