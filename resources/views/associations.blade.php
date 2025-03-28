@extends('layouts.app')

@section('title')
    Kondorfa
@endsection

@section('content')


<div class="container-fluid d-flex flex-row justify-content-center align-items-center" style="min-height: 50vh;">

    <div class="container p-3" style="background-color:white; color: black; font-size: 24px;">

        <h1 style="text-align: center">Egyesületek</h1 >
        
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img src="images/tuzolto1.jpg" class="img-fluid rounded-start mx-auto d-block pt-2" style="height: 200px" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center text-md-start">
                  <h3 class="card-title">Tűzoltó Egyesület</h3>
                  <p class="card-text">
                    A Kondorfai Önkéntes Tűzoltó Egyesület (ÖTE) 1893-ban alakult Németh István vezetésével. 1958-as újraszerveződés óta folyamatosan aktív az egyesület, segítve a hivatásos katasztrófavédőket a környéken keletkező balesetek elhárításában. Tűzoltó egyesület jelenlegi elnöke: Zsoldos Dávid. 
                    </p>
                  <p class="card-text"><small class="text-body-secondary">Elérhetőségek: <a href="https://www.facebook.com/tuzoltoegyesulet.kondorfa">Facebook</a></small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" >
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img src="images/foci.png" class="img-fluid rounded-start mx-auto d-block pt-2" style="height: 200px; margin-left: 30px;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center text-md-start">
                  <h3 class="card-title">Sportegyesület</h3>
                  <p class="card-text">Focicsapatunk 2019-es újraalapítása óta kétszer is sikerült a dobóra felkerüliük, tavaly pedig 5 pont hátránnyal lettek negyedikek. 2021/2022-es szezonban másodikak, majd a következő 2022/2023-as szezon sikerült az aranyérmet bezsebelniük. Sportegyesület elnöke: Szalai Marietta. </p>
                  <p class="card-text"><small class="text-body-secondary">Elérhetőség: <a href="https://www.facebook.com/KondorfaSE">Facebook</a></small></p>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" >
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img src="images/civil1.jpg" class="img-fluid rounded-start mx-auto d-block pt-2" style="height: 200px; margin-left: 0px;" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center text-md-start">
                  <h3 class="card-title">Kondorfáért Egyesület</h3>
                  <p class="card-text">Néhány lelkes falubeli alapította 2024-ben az egyesületet azzal a céllal, hogy a falubeliek összefogásával közösen teremtsenek értékeket a faluban, illetve programokkal gazdagítsák a falu életét. Legutóbb 2025 március elején tartottak egy Farsangi bált. Civil egyesület elnöke: Bödő Zoltánné Betti.</p>
                  <p class="card-text"><small class="text-body-secondary">Elérhetőségek: <a href="https://www.facebook.com/profile.php?id=61562102100107">Facebook</a></small></p>
                </div>
              </div>
            </div>
          </div>

    </div>

</div>


    
@endsection

