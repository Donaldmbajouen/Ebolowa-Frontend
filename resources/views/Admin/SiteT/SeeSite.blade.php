@extends('layouts.DashboardHome')

@section('content')

<div class="row mb-5" style="margin-top: 100px; width:1400px;">
    <div class="col-md-1"></div>
    <div class="col-md-9 table-responsive p-4 centered shadow-lg " style=" margin-bottom:150px; background-color: white; color:black;">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$appUrl .$site['image']}}" style=" width:450px; height:400px; border-radius:15px;">
            </div>
            <div  class="col-md-6 fw-bold" style="font-size: 18px">
                <h1 style="text-align: star;" class="my-2">Site:{{$site['name']}}</h1>

                <h4 style="text-align: center;">Description</h4>
                <hr class="sidebar-divider my-2" style="background-color: black">
                <div class="row mt-4">
                    <div class="col-md-6 ">
                        <p class="">Gerant:  <span>Zingana</span> </p>

                    </div>

                    <p style="text-align: star;">description:  <span>{{$site['description']}}</span> </p>
                </div>
                <h4 style="text-align: center;">Position</h4>
                <hr class="sidebar-divider my-3" style="background-color: black">
                <div class="row">
                    <div class="col-md-6">
                        <p>Longitude:  <span>{{$site['longitude']}}</span> </p>
                    </div>
                    <div class="col-md-6">
                        <p>Latitude:  <span>{{$site['lattitude']}}</span> </p>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-6"></div> --}}
                    <div class="mt-4 col-md-6" style="display: flex; justify-content:end;">
                        <a href="{{route('AdminSiteT')}}"  class="btn btn-lg px-3 w-100 rounded btn-danger">Retour</a>
                    </div>
                    <div class="mt-4 col-md-6" style="display: flex; justify-content:end;">
                        <a href="{{route('SiteUpdate', ['id'=>$site['id']])}}"  class="btn btn-lg px-3 w-100 rounded btn-primary">Editer</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="col-md-3"></div>
</div>
@endsection
