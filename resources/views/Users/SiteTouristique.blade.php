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
        <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/UserImages/hotel1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Hotel Bengo</h3>
                    <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                    <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                    <div class="cardfooter">
                        <p>XAF 200,000</p>
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/UserImages/hotel1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Hotel Bengo</h3>
                    <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                    <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                    <div class="cardfooter">
                        <p>XAF 200,000</p>
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/UserImages/hotel1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Hotel Bengo</h3>
                    <p>RUE AMBASSADE DE RUSSIE, Nkol Eton</p>
                    <p class="btn btn-warning"><i class="fa fa-star"></i> 4.9k Vues</p>
                    <div class="cardfooter">
                        <p>XAF 200,000</p>
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
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
                        <span>par Adulte</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('reserver_une_visite')}}" class="btn btn-outline-warning  btn-lg py-3 px-5"> En Savoir plus</a>
    </div><br>
</div>



@endsection
