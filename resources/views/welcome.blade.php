@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')
<div class="container-fluid p-0">
    <div class="position-relative w-100" style="height: 400px; overflow: hidden;">
        <!-- Sötétítő réteg -->
        <div class="position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;" id="overlay"></div>
        
        <!-- Kép -->
        <img src="images/falu1.jpg" class="w-100 h-100 object-fit-cover" style="object-position: center 25%;" alt="Kép">
        
        <!-- Szöveg, ami csak akkor jelenik meg, ha a kurzor a képen van -->
        <div class="position-absolute text-white w-100 text-center" 
             style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 76px;" id="text-overlay">
            Üdvözöljük Kondorfa weblapján!
        </div>
    </div>
</div>


<div class="container-fluid d-flex flex-column" style="min-height: 50vh;">
    

    <div class="container bg-primary bg-opacity-50 p-3 flex-grow-1">
         
           
    </div>
    

    
</div>

    
@endsection

