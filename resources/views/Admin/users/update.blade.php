@extends('layouts.DashboardHome')

@section('content')

    <div class="row mb-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
            <h2>Modifier un  Utilisateur</h2>

            <div class="col mt-2">
                <div class="col">
                    <form action="{{route("PostUserUpdate, ['id'=>$users['id']]")}}" method="POST" class="p-4" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name" >Nom de l'utilisateur</label>
                                <input type="text" name="name" required
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{$users['name']}}">
                                <span style="color: red">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name" required>Numero de Telephone</label>
                                <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror"
                                value="{{$users['phone_number']}}">
                                <span style="color: red">
                                    @error('phone_number')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="name" >Email</label>
                                <input type="email" name="email" required
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{$users['email']}}">
                                <span style="color: red">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name">Mot de Passe</label>
                                <input type="password" required name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                value="{{$users['name']}}">
                                <span style="color: red">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="">Selectionner le role de l'utilisateur</label>
                                <select class="form-select @error('role') is-invalid @enderror"
                                name="role" aria-label="Default select example" value="{{$users['role']}}">
                                    <option value="utilisateur" selected>Utilisateur</option>
                                    <option value="admin_secondaire">Admin_secondaire</option>
                                </select>
                                @error('role')
                                {{$message}}
                            @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Statut de l'utilisateur</label>
                                <select class="form-select" name="statut" aria-label="Default select example" value="{{$users['statut']}}">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Desactive</option>
                                </select>
                                @error('statut')
                                {{$message}}
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:start;">
                                <a href="{{route('users')}}"  class="btn btn-lg px-3 rounded btn-danger">Retour</a>
                            </div>
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:end;">
                                <input type="submit" value="Enregistrer" class="btn btn-lg rounded btn-primary" style=" background-color: #291157;">
                            </div>
                        </div>


                    </form>
                    <!-- Spinner Bootstrap -->
                    <div id="spinner" class="spinner-border" role="status" style="display: none;">
                        <span class="sr-only">Chargement...</span>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#yourFormId').on('submit', function() {
                            $('#spinner').show(); // Afficher le spinner
                        });
                    });
                    </script>

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('echec'))
                    <div class="alert center alert-danger">
                        {{ session('echec') }}
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div><br>


@endsection

