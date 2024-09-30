@extends('layouts.DashboardHotel')

@section('content')
        @php
            $hotel_id = session('user')['hotel']['id'];
        @endphp

    <div class="row mb-5 p-3">
        <div class="col-md-2"></div>
        <div class="col-md-8 table-responsive p-3 centered shadow-lg w-100" style="background-color: white; color:black;">
            <h2>Ajouter une Piece </h2>
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
                    <form action="{{ route('AddPiece', ['hotel_id' =>$hotel_id])}}" method="POST" class="p-4"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" >Type de Piece</label>
                                <select class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" id="adminSelect" name="gerant_id" required>
                                    <option value="">Sélectionner le type de Piece</option>
                                    <option value="name"> name </option>
                                    <option value="name"> name </option>
                                    <option value="name"> name </option>
                                </select>
                                <span style="color: red; margin-left: 10px">
                                    @error('type')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Prix</label>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                                <span style="color: red; margin-left: 10px">
                                    @error('price')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3 px-3">
                            <select class="form-control @error('type') is-invalid @enderror"  name="statut" required>
                                <option value="">Sélectionner le statut de Piece</option>
                                <option value="1"> Ative </option>
                                <option value="0"> Inactive </option>
                            </select>
                            <span style="color: red; margin-left: 10px">
                                @error('statut')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="row mt-3">
                            <div class="form-floating col-md-12">
                                <textarea class="form-control" name="description"  placeholder="Description" id="floatingTextarea"></textarea>
                                <label class="ms-2" for="floatingTextarea">Description</label>
                            </div>
                            <span style="color: red; margin-left: 10px">
                                @error('description')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-md-6  mt-4" style="display: flex; justify-content:start;">
                                <a href="{{ route('admin_piece', ['hotel_id' =>$hotel_id])}}"  class="btn btn-lg px-3 rounded btn-danger">Retour</a>
                            </div>
                            <div class="col-md-6 mt-4" style="display: flex; justify-content:end;">
                                <input type="submit" value="Enregistrer" class="btn btn-lg rounded btn-primary" style=" background-color: #291157;">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br>


@endsection

