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

    <title>Login</title>
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
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="form-group">
                <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                  <input type="email" name="email" class="form-control _ge_de_ol @error('email') is-invalid @enderror" type="text" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus required="" aria-required="true">
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-group">
                <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                  <input type="password" name="password" class="form-control _ge_de_ol @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="text" placeholder="Enter Password" required="" aria-required="true">
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="checkbox form-group">
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
                </label>
                
                <div class="form-group">
                            <div class="col-md-9 offset-md-1">
                                <button type="submit" class="_btn_04">
                                    {{ __('Login') }}
                                </button>
                                </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        

               

                <div class="form-group nm_lk"><p>Or Login With</p></div>

                <div class="form-group pt-0">
                  <div class="_social_04">
                    <ol>
                      <li><i class="fa fa-facebook"></i></li>
                      <li><i class="fa fa-twitter"></i></li>
                      <li><i class="fa fa-google-plus"></i></li>
                      <li><i class="fa fa-instagram"></i></li>
                      <li><i class="fa fa-linkedin"></i></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection