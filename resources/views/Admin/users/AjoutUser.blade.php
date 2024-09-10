@extends('layouts.DashboardHome')

@section('content')

    <div class="row mb-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
            <h2>Ajouter un Nouvel Utilisateur</h2>
            <div class="col mt-2">
                <div class="col">
                    <form action="" method="POST" class="p-4">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name">Nom de l'utilisateur</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name">Numero de Telephone</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="name">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name">Mot de Passe</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="">Selectionner le role de l'utilisateur</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Utilisateur</option>
                                    <option value="1">Admin_secodaire</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Statut de l'utilisateur</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Active</option>
                                    <option value="1">Desactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:start;">
                                <a href="{{route('AdminSiteT')}}"  class="btn btn-lg px-3 rounded btn-danger">Retour</a>
                            </div>
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:end;">
                                <input type="submit" value="Enregistrer" class="btn btn-lg rounded btn-primary" style=" background-color: #291157;">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div><br>


@endsection

