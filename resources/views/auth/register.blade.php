@extends('layouts.loginLayout')

@section('content')

<div class="container">
    <div class="form-sign">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="label-form">{{ __('Name') }}</label>
                            <input id="name" type="text" class="input-form" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            <div class="col-md-6">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  

                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="label-form">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="input-form" name="email" value="{{ old('email') }}" required autocomplete="email">


                            <div class="col-md-6">
                            @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="label-form">{{ __('Password') }}</label>
                            <input id="password" type="password" class="input-form" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                            <div class="col-md-6">
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="label-form">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="input-form" name="password_confirmation" required autocomplete="new-password">
                            <div class="col-md-6">
                               
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bouton">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
