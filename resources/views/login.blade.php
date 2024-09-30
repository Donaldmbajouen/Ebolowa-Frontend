<!DOCTYPE html>
<html lang="fr">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= " {{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href= " {{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/stylerelog.css') }}" rel="stylesheet" type="text/css">
    <title>Ebolowa.com</title>
</head>
    <div class="wrapper ">


        <div class="container main ">
            @if (session('success'))
                <div class="alert alert-info p-3" role="alert">
                    {{session('success')}}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger p-3" role="alert">
                    {{session('error')}}
                </div>
            @endif

            <div class="rounded-3 " style="padding-right:13px;background-color: #1e0847;" >
                <div class="row row1  p-3" style="border-bottom-right-radius: 40%;border-top-left-radius: 1%;">
                    <div class="col-md-6 side-image" style="background-image: url('{{asset('img/login.png')}}');">
                        <!-- Image -->
{{--                        <img src="{{asset('img/login.pn')}}" >--}}
                    </div>
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <h2> Welcome Back Freind! </h2> <br>
                            <h1>Login </h1><br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-field">
                                    <input type="email" class="input" name="email" >
                                    <div class="label">
                                        <label for="email">Email </label>
                                        <span style="color: red; margin-left: 10px">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                        <i class="fas fa-envelope" style="margin-left: 300px;"></i>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="input" name="password" >
                                    <div class="label">
                                        <label for="password">Password</label>
                                        <span style="color: red; margin-left: 10px">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                        <i class="fas fa-lock" style="margin-left: 300px;"></i>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <input type="submit" class="submit mb-3" value="Login">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="" class="submit w-100 mb-3 bg-danger btn-icon-split" value="">
                                                <span>
                                                    <i class="fab fa-google"></i>
                                                    With Google
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-md-6 text-bg-light" style="color: white">
                                            <button type="" style="color: white" class="submit hover bg-primary w-100 btn-icon-split" value="">
                                                <span>
                                                    <i class="fab fa-facebook-f" style="color: white"></i>
                                                    With Facebook
                                                </span>

                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </form>

                            <div class="signin fa-w-3">
                                <span>Don't have an account? <a href="{{ 'register' }}">Register</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src=" {{ asset('vendor/fontawesome-free/js/all.min.js') }}"></script>
</body>
</html>
