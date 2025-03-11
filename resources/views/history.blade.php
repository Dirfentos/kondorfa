@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    {{-- @include('includes.weather') <!-- Időjárás div --> --}}

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h1 style="text-align: center">Kondorfa története</h1> <br>

<p>
    <img src="images/cimer.png" class="img-fluid float-start me-3" width="200px" height="auto" alt="Címer">
    Kondorfa község Vas vármegyében, az Őrség peremén, a Lugos-patak völgyében helyezkedik el, erdőkkel körülvéve.
    Első írásos említése 1350-ből származik, amikor Gardunfolua néven szerepelt. Neve eredetileg a német "Krottendorf"
    helynévből származik, mai alakja magyarosított forma.
</p>

<p>
    <strong>Történelmi áttekintés:</strong> <br><br>
    <strong>Középkor:</strong> A település a szentgotthárdi ciszterci apátság birtoka volt. Feltételezhető, hogy már
    1540 körül működött iskolája, bár erről írásos emlék nem maradt fenn. Lakói a 16. században református hitre
    tértek, és ekkor még fatemplomuk volt. Az 1599-1601-es adóösszeírás szerint református lelkésze is volt a falunak.
</p>

<p>
    <strong>1664:</strong> A szentgotthárdi csata után a török pusztítások elől menekülők a falu déli részén, a Bucsa-hegyen
    telepedtek le.
</p>

<p>
    <img src="images/archiv5.jpg" class="img-fluid float-end ms-3" width="400px" height="auto" alt="Régi archív kép">
    <strong>Kulturális örökség és hagyományok:</strong><br>
    A település hagyományai, építészete, kultúrája és nyelvjárása az Őrségi Nemzeti Park szerves részét képezik.
    A falu hagyományos népszokásai közé tartozik a gyertyaszentelés, barkaszentelés, húsvéti örömtűzgyújtás és a lucázás.
    Egyedi szokás a "suprálás", amikor a gyerekek fűzfavesszőből készült korbáccsal jó egészséget kívánnak.
</p>

<p>
    <strong>Természeti környezet:</strong><br>
    Kondorfa környékét gazdag erdők borítják, ahol megterem az ízletes vargánya, rókagomba (nyulica), rizike (fenyőalja),
    galambgomba (galambica) és őzlábgomba. Az erdőgazdálkodás és fakitermelés hagyományosan sok család megélhetését
    biztosította.
</p>

        
    </div>

        {{-- @include('includes.weather') <!-- Időjárás div --> --}}

</div>


    
@endsection

