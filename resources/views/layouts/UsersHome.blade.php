<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="{{ asset ('css/UserStyle.css') }}" rel="stylesheet" type="text/css">


    <link href= " {{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href= " {{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">





    <title>Ebolowa Cameroun</title>
</head>
<body>

   <nav class=" navbar navbar-expand-sm p-2 fixed-top" style="background-color:rgba(173, 185, 203, 0.649); box-shadow:0px 3px 10px -1px black; ">
        <div class="container-fluid ms-5">
        <a class="Title navbar-brand nav-link me-5" style="color: rgb(14, 10, 74); font-size: 25px;" href="{{route('accueil')}}"><span class="first">E</span><span class="end me-5"> Bolowa</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarsExample03">
                <ul class="navbar-nav ms-5  mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link me-2" style="color: rgb(14, 10, 74);"  href="{{route('historique')}}">Histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2"style="color: rgb(14, 10, 74)" href=" {{route('site_touristique')}} ">Site Touristiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" style="color: rgb(14, 10, 74);" href="{{route('hotels')}}">Hotels</a>
                    </li>
                </ul>
                <form class="d-flex langue" role="search">
                    <button class="btn btn-success" type="submit">EN <i class="fa fa-chevron-down"></i></button>
                </form>
        </div>
        </div>
    </nav>

    @yield('content')


    <div class="container-fluid bg-light p-3"
    {{-- style="color: rgb(7, 4, 54);z-index: 1000; background-image:url('{{asset('img/UserImages/tribune.png')}}');
    background-repeat:no-repeat;"> --}}
        <footer class="py-5 px-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3 ms-5 me-5">
              <h5 class="fw-bold">EBOLOWA</h5><br>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col-6 col-md-1 mb-3 ">
              <h5 class="fw-bold">company</h5><br>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Carrers</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mobile</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-1 mb-3">
                <h5 class="fw-bold">Contact</h5><br>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Help/Faq</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">press</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Afilates</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-1 mb-3">
              <h5 class="fw-bold">More</h5><br>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              </ul>
            </div>

            <div class="col-md-4 offset-md-1 mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
          <div class="d-flex flex-column flex-sm-row justify-content-center mt-2  border-top">
            <p>&copy; 2024 Ebolowa.com, Cameroon All rights reserved.</p>
          </div>
        </footer>
    </div>

    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src=" {{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
</body>
</html>
<!-- chercher a propos de timeline et pricing pour des pages tabs -->



