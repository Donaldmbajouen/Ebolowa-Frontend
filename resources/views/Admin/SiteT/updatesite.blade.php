@extends('layouts.DashboardHome')

@section('content')

    <div class="row mb-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
            <h2>Ajouter un Site Touristique</h2>
            <div class="col mt-2">
                <div class="col">
                    <form action="{{route('PostSiteUpdate', ['id' => $sites['id']])}}" method="POST" class="p-4" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name">Nom de du Site Touristique</label>
                                <input type="text" name="name" value="{{$sites['name']}}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name">Longitude</label>
                                <input type="text" value="{{$sites['longitude']}}" name="longitude" class="form-control @error('longitude') is-invalid @enderror"value="{{ old('longitude') }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('longitude')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="name">Selectionner le Gerant</label>
                                <select class="form-control @error('user_id') is-invalid @enderror"value="{{ old('user_id') }}" name="user_id"  aria-label="Default select example">
                                    <option value="{{$sites['user_id']}}" selected> Gerant Actuel</option>
                                    @foreach ($adminNames as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <span style="color: red; margin-left: 10px; margin-bottom:0px;">
                                    @error('user_id')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="name">Latitude</label>
                                <input type="text" value="{{$sites['lattitude']}}" name="lattitude" class="form-control @error('lattitude') is-invalid @enderror"value="{{ old('lattitude') }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('lattitude')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 mb-2">
                                <label for="">Etat du Site Touristique</label>
                                <select class="form-select" aria-label="Default select example" name="statut">
                                    <option value="{{$sites['statut']}}" selected>
                                        @if ($sites['statut'] == 1)
                                            Actif
                                        @else
                                           Inactif
                                        @endif
                                    </option>
                                    @if ($sites['statut'] == 1)
                                        <option value="0">Inactif</option>
                                    @else
                                        <option value="1">Actif</option>
                                    @endif
                                </select>
                                {{-- @foreach ($adminNames as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach --}}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-2">
                                <label for="name">Entrer une Image de du Site Touristique</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('image')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-md-12">
                                <label for="name">Ajouter une Description de du Site Touristique</label>
                                <textarea  class="form-control @error('description') is-invalid @enderror" name="description">{{$sites['description']}}</textarea>
                                <span style="color: red; margin-left: 10px">
                                    @error('description')
                                        {{$message}}
                                    @enderror
                                </span>
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

