<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BANAUNE HO?-HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('theme/index/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('theme/index/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{asset('theme/request/css/style.css')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/index/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/index/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/index/css/style.css')}}" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="#">BANAUNE HO?</a></h1>     

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li><a href="{{ url('about') }}">About us</a></li>
            <li><a href="#">Customization</a></li>
            <li><a href="#">Previews</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="{{ route('register') }}" class="getstarted">Sign up</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->