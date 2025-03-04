@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    {{-- @include('includes.weather') <!-- Időjárás div --> --}}

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h1 style="text-align: center">Kondorfa története</h1> <br>

        <div class="col-md-4">
            <img src="images/cimer.png" class="img-fluid float-start me-3" alt="Kép">
        </div>

       <p>Kondorfa község Vas vármegyében, az Őrség peremén, a Lugos-patak völgyében helyezkedik el, erdőkkel körülvéve. Első írásos említése 1350-ből származik, amikor Gardunfolua néven szerepelt. Neve eredetileg a német "Krottendorf" helynévből származik, mai alakja magyarosított forma. <br><br>
                
        Történelmi áttekintés: <br><br>
        
        Középkor: A település a szentgotthárdi ciszterci apátság birtoka volt. Feltételezhető, hogy már 1540 körül működött iskolája, bár erről írásos emlék nem maradt fenn. Lakói a 16. században református hitre tértek, és ekkor még fatemplomuk volt. Az 1599-1601-es adóösszeírás szerint református lelkésze is volt a falunak. <br>
        
        
        1664: A szentgotthárdi csata után a török pusztítások elől menekülők a falu déli részén, a Bucsa-hegyen telepedtek le.<br> 
        
        
        Kulturális örökség és hagyományok:<br>
        
        A település hagyományai, építészete, kultúrája és nyelvjárása az Őrségi Nemzeti Park szerves részét képezik. A falu hagyományos népszokásai közé tartozik a gyertyaszentelés, barkaszentelés, húsvéti örömtűzgyújtás és a lucázás. Egyedi szokás a "suprálás", amikor a gyerekek fűzfavesszőből készült korbáccsal jó egészséget kívánnak.<br>
        
        
        Természeti környezet:<br>
        
        Kondorfa környékét gazdag erdők borítják, ahol megterem az ízletes vargánya, rókagomba (nyulica), rizike (fenyőalja), galambgomba (galambica) és őzlábgomba. Az erdőgazdálkodás és fakitermelés hagyományosan sok család megélhetését biztosította. <br>
        
        
        Címer:<br>
        
        A község címerében egy aranyszínű toll jelképezi a helyi iskolát és azt, hogy a falu sok értelmiségi embert adott az országnak. Az aranyszínű szárnyas tulok Szent Lukácsot, a község védőszentjét szimbolizálja. Két aranyszínű fenyőfa utal a "Gyantás ország" hagyományára, mivel az ősök fenyőfából gyantát olvasztottak ki. A címer alatt a "Kondorfa 1350." felirat a község első írásos említésére utal. <br>
        
        
        Érdekesség:<br>
        
        A település közelében, a Kondorfa Hegy-völgy Vadon területen, az Őrségi Nemzeti Parkban vadlóménest alakítottak ki. A Hortobágyról érkezett Przsevalszkij-lovak mellett európai bölények is élnek itt, hogy vizsgálhassák, milyen lehetett az Őrség, amikor még a nagy növényevők tevékenysége alakította a táj képét. <br>
        
        
        Kondorfa gazdag történelme, kulturális öröksége és természeti környezete révén különleges helyet foglal el az Őrségben, megőrizve hagyományait és értékeit a mai napig.</p>

    </div>

        {{-- @include('includes.weather') <!-- Időjárás div --> --}}

</div>


    
@endsection

