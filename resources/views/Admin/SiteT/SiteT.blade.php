@extends('layouts.DashboardHome')

@section('content')

<div class="row mb-5">
    <div class="col-md-1"></div>
    <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
        <div class="row bg-secondary-subtle p-3">
            <div class="ms-5 input_search">
                <i class="fa fa-search"></i>
                <input  type="text" placeholder="Rechrcher un Site...">
            </div>
            <div class="col button-header">
                <a href="{{route('AjouterSiteT')}}" class="btn  btn-circle btn-md me-2"style=" background-color: #291157;color:white;"><i class="fa fa-plus"></i></a>
                <button class="btn  btn-circle btn-md me-5" style=" background-color: #291157;color:white;"><i class="fa fa-redo"></i></button>
            </div>
        </div><br><br>
        <div class="col">
            <h2 class="mb-5">Listes des Site Touristiques</h2>
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
                {{dd($sites)}}
                @foreach ($sites as $site )


                    <tr>
                        <th scope="row">{{$hotel['id']}}</th>
                        <td>{{$site['name']}}</td>
                        <td>{{$site['gerant_id']}}</td>
                        <td>{{$site['longitude']}}</td>
                        <td>{{$site['lattitude']}}</td>
                        <td class="d-flex" >
                            <a href="/admin//Voirsites/{{$site['id']}}" class="nav-link p-0 px-2"><i class="fa fa-eye" ></i></a>
                            <a href="/admin/sites/{{$site['id']}}" class="nav-link p-0 px-2"><i class="fa fa-pen" ></i></a>
                            <a href="/admin/sites/{{$hotel['id']}}" class="nav-link p-0 px-2"><i class="fa fa-trash-alt" ></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
