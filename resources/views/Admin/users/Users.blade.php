@extends('layouts.DashboardHome')

@section('content')

<div class="row mb-5">
    {{-- <div class="col-md-1"></div> --}}
    <div class="col-md-11 ms-5 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
        <div class="row  p-3" style="background-color: #bcbbbe">
            <div class="ms-5  input_search">
                <i class="fa fa-search"></i>
                <input class="bg-transparent" style="color: white" type="text" placeholder="Rechercher un utilisateur...">
            </div>
            <div class="col button-header">
                <a href="{{route('AddUsers')}}" class="btn  btn-circle btn-md me-2"style=" background-color: #291157;color:white;"><i class="fa fa-plus"></i></a>
                <button class="btn  btn-circle btn-md me-5" style=" background-color: #291157;color:white;"><i class="fa fa-redo"></i></button>
            </div>
        </div><br><br>
        <div class="col">
            <h2 class="mb-5">Listes des Utilisateurs</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Role</th>
                    <th scope="col">Statut</th>
                    <th scope="col centerd">Actions</th>
                  </tr>
                </thead>

                    @php
                        $id = 1
                    @endphp
                @foreach ($users as $user )

                  <tr>
                      <th scope="row">{{$id++}}</th>
                      <td>{{$user['name']}}</td>
                      <td>{{$user['phone_number']}}</td>
                      <td>{{$user['role']}}</td>

                      <td> @if ($user['statut'] === 1)
                                Actif
                            @else
                                Desactive
                            @endif
                       </td>

                      <td class="d-flex" >
                          {{-- <a href="/users/{{$user['id']}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a> --}}
                          {{-- <form action="{{route('UserDelt', ['id' =>$user['id']])}}" method="POST">
                            @csrf
                                <button class="btn btn-danger " type="submit"><i class="fa fa-trash-alt"></i> Supprimer</button>
                            </form> --}}

                            <a class="btn ms-2" href="{{$user['id']}}/update" style="background-color: #291157; color:white;" >
                                <i class="fas fa-pen"></i> Editer</a>
                      </td>
                  </tr>

                @endforeach
            </table>
            @if (session('delete'))
                <div class="alert center alert-danger">
                    {{session('delete')}}
                </div>
            @endif
        </div>
    </div>
    {{-- <div class="col-md-1"></div> --}}
</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
