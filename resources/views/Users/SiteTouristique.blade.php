@extends('layouts/UsersHome')

@section('content')


<div class="hearder_content_touristique mb-1 ">
    <img src="{{ asset('img/UserImages/reunification.png') }}" style="" class="card-img" alt="...">
    <div class="d-flex  form-content justify-content-center bg-dark p-2">
        <form action="">
            <div class="row py-2">
                <div class="col-sm-3  mx-1 form-header">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" class="form-control" id="firstName" placeholder="Ebolowa" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <i class="fa fa-users"></i>
                    <input type="text" class="form-control" id="firstName" placeholder="2 adultes, 1 room" value="" required>
                </div>
                <div class="col-sm-2 py-1">
                    <input type="submit" class="form-control btn btn-primary px-1 py-2 " id="firstName" value="Search" required>
                </div>
            </div>
        </form>

    </div>

</div>

<div class="content-touritique">
    <div class="row ">
        <h1>Les Sites Touristiques Les Plus Populaire De Ebolowa</h1><hr class="mb-5">
        @foreach ($SitesActifs as $site)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{$appUrl .$site['image']}}" class="card-img-top" style="height:350px;width:410px;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="fw-bold fs-2 nav-link">{{$site['name']}}</a>
                            <button class="btn btn-icon" style="outline: none; border: none;">
                                <i class="fas fa-map-marker-alt" style="color: rgb(252, 49, 4); font-size: 40px;"></i>
                            </button>
                        </div>
                        <p>{{$site['description']}}</p>
                        <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                        <div class="cardfooter">
                            <a class="btn btn-lg btn-outline nav-link fs-5" href="{{route('reserver_une_visite')}}" style="color:rgb(29, 29, 161)">En savoir plus</a>
                            <span>Ebolowa cameroun</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
