@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="form-sign">
            <div class="col-md-6">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Creer offre</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('offre.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Destination</label>
                                        <input value="{{ old('destination') }}" type="text" name="destinationl" id="destination" class="form-control">
                                        @error('destination')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Prix</label>
                                        <input value="{{ old('prix') }}" type="entier" name="prix" id="prix" class="form-control">
                                        @error('prix')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Duree</label>
                                        <input value="{{ old('duree') }}" type="entier" name="duree" id="duree" class="form-control">
                                        @error('duree')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="bouton">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection