@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="form-sign">
            <div class="col-md-6">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Creer reservation</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('reservation.store') }}">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date_Debut</label>
                                        <input value="{{ old('datedebut') }}" type="date" name="datedebut" id="datedebut" class="form-control">
                                        @error('datedebut')
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
                                        <label>Date_Fin</label>
                                        <input value="{{ old('datefin') }}" type="date" name="datefin" id="datefin" class="form-control">
                                        @error('datefin')
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