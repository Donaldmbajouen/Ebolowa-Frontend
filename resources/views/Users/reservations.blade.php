@extends('layouts/UsersHome')

@section('content')
<div class="hearder_content_touristique mb-5">
    <img src="{{ asset('img/UserImages/hotels1.png') }}" style="" class="card-img" alt="...">
    <div class="d-flex  form-content justify-content-center bg-dark p-2">
        <form action="">
            <div class="row py-2">
                <div class="col-sm-3  ms-3 form-header">
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

</div> <br><br>
<div class="container mt-5">
    <div class="row">
        <h2 class="w-100">Secure Your Reservation</h2><br>
        <div class="col-md-8">
            <h6 class="w-100 bg-primary rounded-1 p-3" style="color: white">Room 1, 2 adults, 1 double bed and 1 twin bed, Non-smoking</h6>
                <form action="">
                    <div class="row mx-1">
                        <div class="col-sm-3  p-2 ">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" placeholder="Talla" value="" required>
                        </div>
                        <div class="col-sm-3 mx-1 p-2">
                            <label for="">Prenom</label>
                            <input type="text" class="form-control" placeholder="Jean" value="" required>
                        </div>
                    </div><br>
                    <div class="col-sm-5 p-2 ">
                        <label for="">Numero de Telephone</label>
                        <input type="number" class="form-control p-2" placeholder="6 78 78 78 78" value="" required>
                    </div>
                    <div class="col-sm-5 p-2 ">
                        <label for="">Email</label>
                        <input type="email" class="form-control p-2" placeholder="email@gmail.com" value="" required>
                    </div>

                </form>
            <div class="">
                <h6 class="w-100 bg-primary rounded-1 p-3 mt-3" style="color: white">Options de Paiement</h6>
                <div class="row mb-2" style="text-align: center">
                    <div class="col-md-2" style="border-bottom: 3px solid blue">Credit card</div>
                    <div class="col-md-2">OrangeMoney</div>
                    <div class="col-md-2">PayPal</div>
                </div>
                <div class="col-sm-5 p-2 ">
                    <label for="">Nom de la carte</label>
                    <input type="text" class="form-control p-2 bg-secondary-subtle " placeholder="Jean blue" value="" required>
                </div>
                <div class="col-sm-5 p-2 ">
                    <label for="">Debit</label>
                    <input type="number" class="form-control p-2 bg-secondary-subtle" placeholder="20000 XAF" value="" required>
                </div>
               <div class="col-sm-5 p-2">
                <button class="btn btn-primary mt-2 mb-5 w-100">Reserver</button>
               </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <img src="{{ asset('img/UserImages/hotel1.png') }}" style="width:300px;height:150px;" class="card-img mb-3" alt="...">
            <div class="">
                <h5>Lakeside HOTEL</h5>
                <i class="fas fa-star" style="color: rgb(245, 237, 19)"></i><i class="fas fa-star" style="color: rgb(245, 237, 19)"></i><i class="fas fa-star" style="color: rgb(245, 237, 19)"></i><i class="fas fa-star" style="color: rgb(245, 237, 19)"></i>
                <p>Non refundable
                    Check in: Sunday, March 18, 2022
                    Check out: Tuesday, March 20, 2022
                    2 night stay</p>
            </div>
            <div class="card mt-5">
                <div class="card-titlte p-2 bg-success" style="text-align: center">
                    <h4>Details du Prix</h4>
                </div>
                <div class="card-body">
                    <pre>1 chambre X 2 nuits       40000 XAf</pre>
                    <pre>Frais de services          1000XAf</pre><hr>
                    <h4>Total : 41000XAF </h4> <hr>
                </div>
            </div>
        </div>
        <h4 class="bg-warning p-3">Informations Importante pour la Reservations</h4>
        <pre>·This rate is non´refundable. If you change or cancel your booking you ºill not get a refund or credit
            1. to use for a future stayÇ
            2. Stay e>tensions ºill re§uire a neº reservationÇ
            3.  ¥ront desk staff ºill greet guests on arriva¬
            4. No refunds ºill be issued for late check´in or early check´out.</pre>
    </div>
</div> <br><br><br>
@endsection
