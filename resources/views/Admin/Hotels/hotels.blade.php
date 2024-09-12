@extends('layouts.DashboardHome')

@section('content')

<div class="row mb-5">
    <div class="col-md-1"></div>
    <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
        <div class="row bg-secondary-subtle p-3">
            <div class="ms-5 input_search">
                <i class="fa fa-search"></i>
                <input  type="text" placeholder="Rechercher un Hotel...">
            </div>
            <div class="col button-header">
                <a href="{{route('AjouterHotels')}}" style=" background-color: #291157;color:white;" class="btn btn-circle btn-md me-2"><i class="fa fa-plus"></i></a>
                {{-- <button class="btn btn-primary btn-rounded-circle btn-md me-2"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="fa fa-plus"></i></button> --}}
                <button class="btn  btn-circle btn-md me-5"style=" background-color: #291157;color:white;"><i class="fa fa-redo"></i></button>
            </div>
        </div>
       <br><br>
        <div class="col">
            <h2 class="mb-5">Listes des Hotels</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Gerant</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Lattitude</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>

                @foreach ($hotels as $hotel )


                    <tbody>
                    <tr>
                        <th scope="row">{{$hotel['id']}}</th>
                        <td>{{$hotel['name']}}</td>
                        <td>{{$hotel['gerant_id']}}</td>
                        <td>{{$hotel['longitude']}}</td>
                        <td>{{$hotel['lattitude']}}</td>
                        <td class="d-flex" >
                            <a href="/admin//Voirhotels/{{$hotel['id']}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                            <a href="/admin/Hotels/{{$hotel['id']}}" class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                            <a href="/admin/Hotels/{{$hotel['id']}}" class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
