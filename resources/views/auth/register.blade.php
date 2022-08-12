@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{asset('theme/login/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/login/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/login/css/style.css')}}" rel="stylesheet">

    <title>Register</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="{{asset('theme/login/images/user.png')}}">
                </div>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="form-control _ge_de_ol @error('name') is-invalid @enderror" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                    </div>
                <div class="form-group">
                <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                  <input type="email" name="email" class="form-control _ge_de_ol @error('email') is-invalid @enderror" type="text" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-group">
                <label for="address" class="col-md-4 col-form-label ">{{ __('Address') }}</label>
                  <input type="text" name="address" class="form-control _ge_de_ol @error('address') is-invalid @enderror" type="text" placeholder="Enter Address" value="{{ old('address') }}" required autocomplete="address">
                  @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-group">
                <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone no') }}</label>
                  <input type="text" name="phone" class="form-control _ge_de_ol @error('phone') is-invalid @enderror" type="text" placeholder="Enter number" value="{{ old('phone') }}" required autocomplete="phone">
                  @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                

                <div class="form-group">
                <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                  <input type="password" name="password" class="form-control _ge_de_ol @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required autocomplete="new-password" >
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control _ge_de_ol" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
            
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn _btn_04">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
    