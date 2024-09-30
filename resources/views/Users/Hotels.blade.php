@extends('layouts/UsersHome')

@section('content')


<div class="hearder_content_touristique mb-1">
    <img src="{{ asset('img/UserImages/reunification.png') }}" style="" class="card-img" alt="...">
    <div class="d-flex  form-content justify-content-center bg-light p-2">
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
        <h1>Les Hotels Les Plus Populaires Et Les Plus Splendides De Ebolowa</h1><hr class="mb-5">
        @foreach ($hotelsActifs as $hotel )
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{$appUrl .$hotel['image']}}" class="card-img-top" style="width:410px; height:350px;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{route('pieces', ['hotel_id' => $hotel['id']])}}" class="fw-bold fs-2 nav-link">Hotel {{$hotel['name']}}</a>
                            <a href="{{route('map', ['id'=> $hotel['id']])}}" class="btn btn-icon" style="outline: none; border: none;">
                                <i class="fas fa-map-marker-alt" style="color: rgb(252, 49, 4); font-size: 40px;"></i>
                            </a>
                        </div>
                        <p>{{$hotel['description']}}</p>
                        <p class="btn" style="background-color: rgba(255, 246, 70, 0.43)"><i class="fa fa-star"></i> 4.9k Vues</p>
                        <div class="cardfooter">
                            <p>{{$hotel['type']}} Etoiles (<i class="fa fa-star"></i>)</p>
                            <span>Ebolowa, Cameroun</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
