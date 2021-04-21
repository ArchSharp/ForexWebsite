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

    <!--<script type="text/javascript" src="{{ URL::asset('js/archjs.js') }}" defer></script>-->
    
    <link rel="stylesheet" href="{{ URL::asset('css/archstyle.css') }}" >
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary fw-bolder exempt">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logos.jpg" alt="LOGO"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="container collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">{{ $LoggedUserInfo['firstname'] }}</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Log Out</a>
                <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Reset Password</a>
              </ul>
            </li>
          </ul>
        </div>
  </div>
</nav>



<!-- fixed sidebar -->
<section>
<div class="container-fluid" style="margin-top: 80px;">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 border-end navbar-nav-scroll">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Forex
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              - Definition
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Forex
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              - Definition
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
          <div class="d-flex justify-content-center">
            <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
            </iframe>
          </div><br>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint possimus nam nisi porro velit assumenda fugit adipisci, ex voluptatem incidunt, animi repellendus eos in eaque veniam voluptatibus corporis magni error?
        </div>
      </div>
    </main>
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
<script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>