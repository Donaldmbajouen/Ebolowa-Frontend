@extends('layouts.DashboardHotel')

@section('content')
        @php
            $hotel_id = session('user')['hotel']['id'];
        @endphp

<div class="row mb-5">
    <div class="col-md-1"></div>
    <div class="col-md-10 table-responsive p-5 centered shadow-lg " style="background-color: white; color:black;">
        @if (session('success'))
            <span class="alert alert-success">
                {{ session('success')}}
            </span>
         @endif
         @if (session('echec'))
            <span class="alert alert-danger">
                {{ session('echec')}}
            </span>
        @endif
        <div class="row bg-secondary-subtle p-3">
            <div class="ms-5 input_search">
                <i class="fa fa-search"></i>
                <input  type="text" placeholder="Rechercher une Piece...">
            </div>
            <div class="col button-header">
                <a href="{{ route('AddFormPiece', ['hotel_id' =>$hotel_id])}}" style=" background-color: #291157;color:white;" class="btn btn-circle btn-md me-2"><i class="fa fa-plus"></i></a>
                {{-- <button class="btn btn-primary btn-rounded-circle btn-md me-2"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="fa fa-plus"></i></button> --}}
                <button class="btn  btn-circle btn-md me-5"style=" background-color: #291157;color:white;"><i class="fa fa-redo"></i></button>
            </div>
        </div>
       <br><br>
        <div class="col">
            <h2 class="mb-5">Listes des Pieces</h2>
            <table class="table">
                <thead>
                        @php
                            $ide = 1
                        @endphp

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Type</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">Statut</th>
                            <th scope="col"class="text-center">Actions</th>
                        </tr>
                        </thead>
                    @foreach ($pieces as $piece )
                            <tbody>
                            <tr>
                            <th scope="row">{{$ide++}}</th>
                            <td>{{$piece['type']}}</td>
                            <td>{{$piece['price']}}</td>
                            <td>{{$piece['description']}}</td>
                            <td>
                                @if($piece['statut'] == 1)
                                    Actif
                                @else
                                    Inactif
                                @endif
                            </td>
                            <td class="d-flex justify-content-end" >

                                <a class="btn me-2" href="#" style="background-color: #291157; color:white;" >
                                    <i class="fas fa-pen"></i>
                                </a>

                                <a class="btn me-2 btn-success" href="#" style="color:white;" >
                                    <i class="fas fa-eye"></i>
                                </a>

                                <form action="#" method="POST">
                                    @csrf
                                        <button class="btn btn-danger " onclick="return confirm('Etes-vous sur de vouloir supprimer cette Piece?')"
                                            type="submit"><i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
