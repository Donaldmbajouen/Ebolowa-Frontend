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
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>Mark</td>
                      <td>Mark</td>
                      <td class="d-flex" >
                          <a href="{{route('Voirhotels')}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                      </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                      <td class="d-flex" >
                          <a href="{{route('Voirhotels')}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                      </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                      <td class="d-flex" >
                          <a href="{{route('Voirhotels')}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">4</th>
                      <td>Larry the Bird</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td class="d-flex" >
                          <a href="{{route('Voirhotels')}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">5</th>
                      <td>Larry the Bird</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td class="d-flex" >
                          <a href="{{route('Voirhotels')}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                          <a class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                      </td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>

</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
