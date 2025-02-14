@extends('layouts.DashboardHome')

@section('content')

    <div class="row mb-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
            <h2>Ajouter un hotel</h2>
            {{-- {{dd($hotel['image']) }} --}}
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
            <div class="col mt-2">
                <div class="col">
                    <form action="{{route('PostUpdateHotel', ['id' => $hotel['id']])}}" method="POST" class="p-4"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" name="name">Nom de L'Hotel</label>
                                <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $hotel['name'] }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Longitude</label>
                                <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror"value="{{ $hotel['longitude'] }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('longitude')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="name">Entrer une Image de L'Hotel</label>
                                <input type="file" name="image" value="{{$hotel['image'] }}"  class="form-control @error('image') is-invalid @enderror" value="{{$hotel['image']}}">
                                <span style="color: red; margin-left: 10px">
                                    @error('image')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Latitude</label>
                                <input type="text" name="lattitude" value="{{$hotel['lattitude'] }}"  class="form-control @error('longitude') is-invalid @enderror">
                                <span style="color: red; margin-left: 10px">
                                    @error('lattitude')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                {{-- {{dd($adminNames)}} --}}
                                <label for="">Selectionner le type D'Hotel</label>
                                <select class="form-select @error('type') is-invalid @enderror" value="{{$hotel['type'] }}" name="type" aria-label="Default select example">
                                    <option value="1" selected>01 etoiles</option>
                                    <option value="2">02 etoiles</option>
                                    <option value="3">03 etoiles</option>
                                    <option value="4">04 etoiles</option>
                                </select>
                                <span style="color: red; margin-left: 10px">
                                    @error('type')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Etat De L'Hotel</label>
                                <select class="form-select @error('statut') is-invalid @enderror" value="{{$hotel['statut'] }}" name="statut" aria-label="Default select example">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Desactive</option>
                                </select>
                                <span style="color: red; margin-left: 10px">
                                    @error('statut')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <select class="form-control @error('user_id') is-invalid @enderror" id="adminSelect" name="user_id" required>
                                <option value="{{$hotel['user_id']}}">Gerant Actuel de l"hotel</option>

                                @foreach ($adminNames as $id => $name)

                                    <option value="{{$id}}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <span style="color: red; margin-left: 10px">
                                @error('user_id')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="name">Ajouter une Description de L'Hotel</label>
                                <textarea label="textarea" name="description"  class="form-control @error('description') is-invalid @enderror">
                                    {{$hotel['description'] }}
                                </textarea>
                            </div>
                            <span style="color: red; margin-left: 10px">
                                @error('description')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:start;">
                                <a href="{{route('Adminhotels')}}"  class="btn btn-lg px-3 rounded btn-danger">Retour</a>
                            </div>
                            <div class="col-md-6 mt-4" style="display: flex; justify-content:end;">
                                <input type="submit" value="Enregistrer" class="btn btn-lg rounded btn-primary" style=" background-color: #291157;">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div><br>


@endsection

