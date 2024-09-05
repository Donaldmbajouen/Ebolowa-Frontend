@extends('layouts/UsersHome')

@section('content')

<div class="container">
    <div class="col">
        <img src="{{asset('img/UserImages/hotels1.png')}}" class="d-flex w-100" style="height:600px;">
    </div>
    <div class="d-flex  form-content justify-content-center mt-0">
        <form action="">
            <div class="row py-2 bg-dark rounded-3 ">
                <div class="col-sm-3  mx-1 form-header">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" class="form-control" id="firstName" placeholder="Ebolowa" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <input type="date" class="form-control bg-light" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <input type="date" class="form-control" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-sm-2 mx-1 form-header">
                    <i class="fa fa-users"></i>
                    <input type="number" class="form-control" id="firstName" placeholder="2 adultes, 1 room" value="" required>
                </div>
                <div class="col-sm-2 py-1">
                    <input type="submit" class="form-control btn btn-primary px-1 py-2 " id="firstName" value="Search" required>
                </div>
            </div>
        </form>

    </div><br><br>

    <div class="row">
        <div class="col-md-3">
            <div class="bg-light p-4 rounded-2 Search_property">
                <h5 class="">Rechercher par le Nom</h5>
                <div class="input_search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="p-2" placeholder="Rechercher">
                </div>
            </div>
            <h3>Filtrer Par</h3>
            <div class="col bg-light p-3">
                <h5 class="">Votre Budget par Jour</h5><hr>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            XOF  0 - XOF  200 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 200
                        </label>
                    </div><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            XOF  200 - XOF  500 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  500
                        </label>
                    </div><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            XOF  500 - XOF  1000   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;   10
                        </label>
                    </div><hr>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            XOF  1000 - XOF  2000  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 2000
                        </label>
                    </div><hr>
                </div>

            </div><br>
            <div class="col">
                <div class="bg-light p-4 rounded-2 Search_property">
                    <h5 class="">Etoiles</h5>
                    <p>Show only ratings more than</p>
                    <div class="d-flex">
                        <button class="rounded-1 p-2">1 <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i></button>
                        <button class="p-2">2 <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i></button>
                        <button class="p-2">3 <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i></button>
                        <button class="p-2">4 <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i></button>
                        <button class=" rounded-1 p-2">5 <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i></button>
                    </div>
                </div>
            </div><br>
            <div class="col bg-light p-3">
                <h5 class="">Vos Activitees</h5><hr>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            La Nage&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                        </label>
                    </div><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           La peche &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        </label>
                    </div><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Le Velo  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                        </label>
                    </div><hr>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            La Lecture &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                        </label>
                    </div><hr>
                </div>

            </div><br>

        </div>

{{-- comment redimensionner les images avec php ou laravel ou avec une autre bibliotheques? --}}
        <div class="col-md-9">
            <h1>Melbourne : 2,582 search results found</h1>
            <div class="d-flex justify-content-between p-3">
                <ul class="nav nav-pills justify-content-start w-100 px-3 g-1 ">
                    <li class="nav-item">
                      <a class="nav-link active rounded-1 p-2" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link rounded-1 p-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link rounded-1 p-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-1 p-2" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-1 p-2" href="#">Link</a>
                    </li>
                </ul>
                <select class="form-select w-50" aria-label="Default select example">
                    <option selected>Rechercher Par...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3  " style="max-height:210px ;">
                <div class="row g-0">
                  <div class="col-md-4 pt-3 ps-3">
                    <img src="{{asset('img/UserImages/Hotl.png')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="mb-1">Lakeside Motel Warefront</h4>
                        <div>
                            <p>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(238, 141, 15)"></i>
                                <i class="fa fa-star" style="color: rgb(3, 3, 2)"></i>
                                <span>4.5 (1200 Reviews)</span>
                            </p>

                            <div class="d-flex justify-content-md-between">
                                <p class="card-text"><small class="text-body-secondary"> in gravida nulla. Nulla vel metus scelerisque <br> ante sollicitudin. Cras purus odio,</small><br>
                                    <a href="#" class="btn bn-lg btn-primary py-2 mt-3">Voir la Disponibilite</a>
                                </p>

                                <p class="">
                                    <button class="btn btn-success rounded-2">5% off</button><br>
                                   <span style="color: rgb(238, 141, 15); font-size:35px;font-weight:bold;">XOF 204</span><br>
                                   <small class="text-body-secondary">1 rooms 2 Days</small>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


    </div>
</div><br><br>


@endsection
