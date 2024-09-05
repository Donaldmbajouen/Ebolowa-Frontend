@extends('layouts/UsersHome')

@section('content')


<div class="card">
    <img src="{{ asset('img/UserImages/nav-ebolowa.png') }}" style="height: 700px; " class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title"><span style="border-bottom: 10px solid rgb(207, 107, 31); border-bottom-left-radius: 200px;">Ebolow</span>a: Un Trésor <br>caché au coeur du <br>Cameroun</h5>
{{--      <p class="card-text">Ebolowa, capitale du département de la Mvila, se dévoile comme un <br>--}}
{{--        joyau caché au cœur du Cameroun, loin de l'agitation des grandes <br>--}}
{{--        villes. Nichée dans un écrin de verdure luxuriante, cette cité paisible <br>--}}
{{--        offre aux visiteurs un havre de paix et une immersion authentique<br> dans--}}
{{--        la culture camerounaise.</p>--}}
    </div>
  </div>
</div>


<div class="container-fluid">
<p  style="display:flex;  justify-content:  center; font-size: 25px; color: rgb(100, 100, 100); margin-top: 30px;">Histoire</p>
<p style="display:flex;  justify-content:  center; color: rgb(14, 10, 74);font-size: 50px;font-family: 'Times New Roman';">Un Riche Heritage Historique</p>
<div class="row bg-light p-5 rounded">
    <div class="col-lg-6 mt-3 histoire d-flex align-items-start">
        <p>Ebolowa est une ville empreinte d'histoire, où se mêlent les traces des civilisations
            passées et les événements marquants qui ont façonné le Cameroun moderne. Avant
            l'arrivée des colons européens, la région d'Ebolowa était peuplée par les peuples Bulu,
            Ewondo et Fang, dont les traditions et coutumes ont laissé une empreinte profonde
            sur la culture locale.
            Avec la colonisation allemande à la fin du XIXe siècle, Ebolowa devient un poste
            militaire stratégique. La période coloniale, suivie de celle sous mandat français, a
            profondément marqué la ville. C'est dans ce contexte que se sont forgés les contours
            du Cameroun moderne. Aujourd'hui, Ebolowa conserve les vestiges de cette histoire
            riche et complexe, invitant les visiteurs à découvrir un patrimoine culturel
            authentique.
            <button class="btn btn-outline-info d-flex align-items-start mt-5 p-2 btn-lg">En Savoir Plus</button>
        </p>

    </div>
    <div class="col-lg-6">
        <img src="{{ asset('img/UserImages/tribune.png') }}"  class="align-self-center wd-100 wd-sm-150 me-3 rounded-3" alt="">
    </div>
</div>
</div><br>


<div class="container py-5" id="custom-cards">
<h1 class="pb-2 border-bottom " style="color: rgb(7, 4, 54); font-size: 50px;">Decouvrez Ebolowa</h1>
<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="fig">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg col-decouvrer" style="background-image: url(' {{ asset('img/UserImages/site2.png') }}'); background-size: cover;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4">Short title, long jacket Much longer title</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
            <small>Earth</small>&nbsp;&nbsp;
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="fig">
    <div class="card card-cover  h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('img/UserImages/site3.png') }}');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4">Much longer title that wraps to multiple lines</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
            <small>Pakistan</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="fig">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('img/UserImages/img-tourisme3.png')}}');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4">Another longer title belongs here</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
            <small>California</small>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="fig">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('img/UserImages/img-tourisme.png') }}');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4">Another longer title belongs here</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
            <small>California</small>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="fig">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('{{ asset('img/UserImages/site3.png')}} ');">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h3 class="pt-5 mt-5 mb-4">Much longer title that wraps to multiple lines</h3>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
            <small>Pakistan</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>
</div>

<div class="container py-4">
<p style="display: flex;justify-content: center;">Hotels</p>
<h1 style="display: flex;justify-content: center;color: rgb(7, 4, 54); font-size: 50px;">Hotels Au Coeur de EBOLOWA</h1><hr>
<div class="row py-4">
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/UserImages/hotel1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Hotel Bengo</h3>
                <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                <div class="cardfooter">
                    <p>XAF 200,000</p>
                    <span>par nuit</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/UserImages/hotel1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Hotel Bengo</h3>
                <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                <div class="cardfooter">
                    <p>XAF 200,000</p>
                    <span>par nuit</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('img/UserImages/hotel1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>Hotel Bengo</h3>
                <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                <div class="cardfooter">
                    <p>XAF 200,000</p>
                    <span>par nuit</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="d-flex justify-content-center">
<button class="btn btn-outline-warning btn-lg py-3 px-5"> En Savoir Plus</button>
</div><br><br>

<div class="header-end">
<p style="font-family: 'Lucida Sans';">Simple et rapide</p>
<h1 style="color: rgb(7, 4, 54); font-size: 50px; ">Reserver une visite <br> avec un Guide Touristique </h1>
</div>
<div class="row row-cols-1 row-cols-md-2 align-items-md-center ms-5 g-5 px-4">

<div class="row row-cols-1 row-cols-sm-2 g-4">

    <div class="d-flex flex-column gap-3">
      <h4 class="fw-semibold mb-0"> <button class="btn btn-circle btn-warning"><i class="fas fa-map-marker-alt fa-2x"></i></button>  Chosir la Destination</h4>
      <p class="text-muted ms-4">Paragraph of text beneath the heading to explain the heading.</p>
    </div>
    <div class="d-flex flex-column gap-3">
        <h4 class="fw-semibold mb-0"> <button class="btn btn-circle btn-danger"><i class="fas fa-bus fa-2x"></i></button> Methode de Transport</h4>
        <p class="text-muted ms-4">Paragraph of text beneath the heading to explain the heading.</p>
    </div>
    <div class="d-flex flex-column gap-3">
        <h4 class="fw-semibold mb-0"> <button class="btn btn-circle btn-success"><i class="fas fa-credit-card fa-2x" ></i></button> Mode de Paiement</h4>
        <p class="text-muted ms-4">Paragraph of text beneath the heading to explain the heading.</p>
   </div>
   <div class="d-flex flex-column gap-2 mt-5">
        <a href="{{route('reserver_une_visite')}}" class="btn btn-outline-warning btn-lg centered py-4 px-4"> En Savoir Plus</a>
    </div>
</div>




<div class="d-flex flex-column align-items-center gap-2 me-3">
    <div class="card mb-3 rounded" style="width: 70%;">
        <div class="card-body align-items-center gap-2"style="">
            <img src="{{ asset('img/UserImages/visite.png')}}" alt="" style="border-radius: 16px;width:100%"><br><br>
            <p>Trip To Greece</p>
            <p>Trip To Greece</p>
            <button class="btn btn-circle btn-warning"><i class="fas fa-map-marker-alt tourism-icon"></i></button>
            <button class="btn btn-circle btn-danger"><i class="fas fa-plane tourism-icon"></i></button>
            <button class="btn btn-circle btn-success"><i class="fas fa-building tourism-icon"></i></button>
        </div>
        <div class="card-footer bg-transparent">
            <span style="font-size: 17px;margin-left: 2%;"><i class="fas fa-university"></i>  24 people going <i class="fas fa-heart" style="margin-left: 60%;"></i></span>
        </div>
      </div>
</div>

</div><br><br>




@endsection
