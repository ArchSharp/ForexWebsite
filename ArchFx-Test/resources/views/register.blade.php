<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchFX - Ease your Forex trading</title>
    <!--<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="archstyle.css">-->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ URL::asset('js/archjs.js') }}" defer></script>
    
    <link rel="stylesheet" href="{{ URL::asset('css/archstyle.css') }}" >
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logos.jpg" alt="LOGO"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <h1 class="dropdown-header">Learn</h5>
                  <a class="dropdown-item" href="#">Forex</a>
                  <a class="dropdown-item" href="#">MQL4</a>
                <h1 class="dropdown-header">Freelance</h5>
                  <a class="dropdown-item" href="#">indicators</a>
                  <a class="dropdown-item" href="#">Expert advisors</a>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonies">Testimonies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactUs">Support</a>
            </li>
          </ul>
        </div>
  </div>
</nav>

<section style="margin-top: 200px;">
  <div class="container card my-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-center">Register</h5>
          <form action="" class="mt-5 form-inline" name="home" id="home" method="post" action="{{url('store-forms')}}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror" placeholder="Enter Email/Username" id="name" name="name" required>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror" placeholder="Enter Password" id="password" name="password" required>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            <button class=" btn btn-primary">Sign Up</button>
            <p class="mt-3"> Already have an account, <a href="{{ route('gotoLoginPage') }}">Sign In</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section start -->
<footer class="footer mt-5 py-3 bg-light">
  <div class="container">
    <div class="row">
      <div class="col offset-3">
        <span class="text-muted">
          &copy; <?php
          $fromYear = 2018;
          $thisYear = (int)date('Y');
          echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> ArchFxGlobe Ltd.
        </span>
        <span class="ms-4"><a href="#">Privacy policy</a></span>
        <span class="ms-4"><a href="#">Terms of reference</a></span>
      </div>
    </div>
  </div>
</footer>

<script src="archjs.js"></script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>