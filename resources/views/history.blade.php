@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    {{-- @include('includes.weather') <!-- Időjárás div --> --}}

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h3 style="text-align: center">Kondorfa története</h3>

       <p>A szentgotthárdi apátság által alapított falu első okleveles említése 1350-ből származik Gardunfalva néven. Később ez változott Gradendorf, Grotendorf-ra, majd pedig egy család neve után Kondorfalva, Kondorfa lett. (A kondorfai dialektus szerint: „Kandorfa”.) Az itt élő Kondor család idővel kihalt.

        Az 1599 –1601 évi adójegyzék szerint evangélikus lelkésze volt a községnek. Ma a lakosság 98%-a római katolikus vallású, csupán 2–3 család református. A falu büszkesége a katolikus templom, ami 1850 –1851-ben épült, titulusa: Szent Lukács. Korábban fatemplom állt a helyén. A XIX. századi iskolaépület jelenleg Szentendrén látható, a Skanzenben. A falu ma három részből áll: Alvég, Fővég, Hegy.
        
        Az Őrségen belül is sajátságos a kondorfai nyelvjárás. Eredetiségét a viszonylagos elszigetelődésnek köszönhetően őrizték meg az itt élők. Gazdag babonagyűjteménnyel rendelkezik a község. Népszokásból is több fönnmaradt: gyertyaszentelés, barkaszentelés, a húsvéti örömtűzgyújtás, Lucázás. Helyi szokás a suprálás. A gyerekek fűzfavesszőből készült korbáccsal suprálnak, amivel a megsuprált legényt nősülésre, a leányt pedig férjhez menésre bíztatják. Nagy hagyománya volt még a Gergely-járásnak: ilyenkor a gyerekek a „Szent Gergely doktornak” kezdetű dalt énekelték.
        
        A település a Lugos patak völgyében terül el, körbevéve gyönyörű erdőkkel, ahol megterem az ízletes vargánya, rókagomba (nyulica), rizike (fenyőalja), galambgomba (galambica), őzláb, és ahogy régen, most is jó néhány család megélhetését biztosítja az erdőgazdálkodás, fakitermelés, fűrészüzem.</p>

    </div>

        {{-- @include('includes.weather') <!-- Időjárás div --> --}}

</div>


    
@endsection

