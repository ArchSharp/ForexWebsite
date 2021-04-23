<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchFX - Ease your Forex trading</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="archstyle.css">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
      function show(shown, hidden) {
        document.getElementById(shown).style.display='block';
        document.getElementById(hidden).style.display='none';
        //var value = JSON.String(document.getElementById(shown));    //to convert object to string
        return false;
      }
    </script>
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

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary fw-bolder exempt">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="../images/fxGlobe.gif" alt="LOGO" style="width:30px; ">ArchFxGlobe</a>
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
            <ul class="nav flex-column">
              <a class="nav-link text-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#">Forex - Beginners   +</a>
              <div class="collapse" id="collapseExample1">
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page2','Page1');">
                    Definition
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Forex trading session
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Who trade Forex market?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Advantages of forex trading
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Effects of Margin in forex trading
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nav flex-column">
              <a class="nav-link text-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Forex - Intermediate   +</a>
              <div class="collapse" id="collapseExample2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Definition
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Forex trading session
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Who trade Forex market?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Advantages of forex trading
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nav flex-column">
              <a class="nav-link text-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Forex - Advanced   +</a>
              <div class="collapse" id="collapseExample3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Definition
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Forex trading session
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Who trade Forex market?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Advantages of forex trading
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nav flex-column">
              <a class="nav-link text-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Our strategy   +</a>
              <div class="collapse" id="collapseExample4">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Definition
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Forex trading session
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Who trade Forex market?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    Advantages of forex trading
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="return show('Page3',value);">
                    How to trade forex profitably
                  </a>
                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
          
          <div class="container" id="Page1">
            <div class="row">
              <h4>What is Forex?</h4>
              <div class="col d-flex justify-content-center text-center">
                <p>The foreign exchange market, which is usually known as “forex” or “FX,” is the largest financial market in the world.</p>
                <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
                </iframe> -->
              </div>
              <p>
                <a href="#" onclick="return show('Page2','Page1');">Show page 2</a>
              </p>
            </div>
          </div>

          <div id="Page2" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page1','Page2');">Show page 1</a>
              <a href="#" onclick="return show('Page3','Page2');">Show page 3</a>
            </p>
          </div>

          <div id="Page3" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page2','Page3');">Show page 2</a>
              <a href="#" onclick="return show('Page4','Page3');">Show page 4</a>
            </p>
          </div>

          <div id="Page4" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page3','Page4');">Show page 3</a>
              <a href="#" onclick="return show('Page5','Page4');">Show page 5</a>
            </p>
          </div>

          <div id="Page5" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page4','Page5');">Show page 4</a>
              <a href="#" onclick="return show('Page6','Page5');">Show page 6</a>
            </p>
          </div>

          <div id="Page6" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page5','Page6');">Show page 5</a>
              <a href="#" onclick="return show('Page7','Page6');">Show page 7</a>
            </p>
          </div>

          <div id="Page7" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page6','Page7');">Show page 6</a>
              <a href="#" onclick="return show('Page8','Page7');">Show page 9</a>
            </p>
          </div>

          <div id="Page8" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page7','Page8');">Show page 7</a>
              <a href="#" onclick="return show('Page9','Page8');">Show page 9</a>
            </p>
          </div>

          <div id="Page9" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page8','Page9');">Show page 8</a>
              <a href="#" onclick="return show('Page10','Page9');">Show page 10</a>
            </p>
          </div>

          <div id="Page10" style="display:none">
            <div class="d-flex justify-content-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos mollitia aliquid perferendis quos quasi sequi ducimus quam illum ratione tenetur repudiandae dolorem saepe, libero ea? Maiores natus voluptatem dicta!
              <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
              </iframe> -->
            </div>
            <p>
              <a href="#" onclick="return show('Page9','Page10');">Show page 9</a>
            </p>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
</section>

<!-- footer section start -->
<footer class="footer other mt-auto py-3 bg-light">
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