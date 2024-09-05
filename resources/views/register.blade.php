<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href= " {{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href= " {{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset ('css/stylerelog.css') }}" rel="stylesheet" type="text/css">
<title>Ebolowa.com</title>
</head>
<body>
<div class="wrapper ">
    <div class="container main">
        <div class="rounded-3" style="padding-right:13px;background-color: #1e0847;" >
            <div class="row p-3"style="border-bottom-right-radius: 40%">
                <div class="col-md-6 side-image" style="background-image: url('{{asset('img/login.png')}}');">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <h2 class=""> Welcome! Get your free Ebolowa account now.</h2><br>
                        <h1>Register Account</h1>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="name" class="input" name="name" >
                                <div class="label">
                                    <label for="name">Username</label>
                                    <span style="color: red; margin-left: 10px">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <i class="fas fa-user" style="margin-left: 300px;"></i>
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
                                <input type="text" class="input" name="phone_number" >
                                <div class="label">
                                    <label for="number">Number</label>
                                    <span style="color: red; margin-left: 10px">
                                        @error('phone_number')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <i class="fas fa-phone" style="margin-left: 300px;"></i>
                                </div>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Register">
                            </div>
                        </form>
                        <div class="signin">
                            <span>Already have an account? <a href="{{route('login')}}">Login</a> </span>
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

