@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')
<div class="container-fluid p-0">
    <div class="position-relative w-100" style="height: 300px; overflow: hidden;">
        <div class="position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5); top: 0; left: 0;" id="overlay"></div>

        <img src="images/falu1.jpg" class="w-100 h-100 object-fit-cover" style="object-position: center 25%;" alt="Kép">

        <div class="position-absolute text-white w-100 text-center" 
             style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 76px;" id="text-overlay">
            Üdvözöljük Kondorfa weblapján!
       </div>
    </div>
</div>

<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    {{-- @include('includes.weather') <!-- Időjárás div --> --}}

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">
       

    </div>

        {{-- @include('includes.weather') <!-- Időjárás div --> --}}

</div>


    
@endsection

