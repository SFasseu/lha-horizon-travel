@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="form-sign">
            <div class="col-md-6">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Creer hebergement</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('Hebergement.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Destinations</label>
                                        <input value="{{ old('destination') }}" type="text" name="destination" id="destination" class="form-control">
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
                                        <label>Nom</label>
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
                                        <label>Adresse</label>
                                        <input value="{{ old('adresse') }}" type="text" name="adresse" id="adresse" class="form-control">
                                        @error('adresse')
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
                                        <label>Type</label>
                                        <input value="{{ old('type') }}" type="text" name="type" id="type" class="form-control">
                                        @error('type')
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