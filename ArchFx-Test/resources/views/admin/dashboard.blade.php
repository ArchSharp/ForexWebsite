<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts/dashPages.head')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary fw-bolder exempt">
  <div class="container-fluid">
    @include('layouts/dashPages.header')
  </div>
</nav>



<!-- fixed sidebar -->
<section>
  <div class="container-fluid" style="margin-top: 80px;">
    <div class="row">
      @include('layouts/dashPages.sidebar')

      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <div class="container" id="Page1">
              <div class="row">
                <h4>What is Forex?</h4>
                <div class="col justify-content-center text-center">
                  <p>Forex derive its name from "Foreign" and "Exchange". It is an international market where currencies (such as $, €, £, ¥, etc)
                     are bought and sold against each other, it is the largest financial market in the world. Forex market opens 24 hours per day and 5 days per week
                     <b class="text-success fw-bolder">$6.6 TRILLION</b> is pumped into forex market every day, it is from these people make money.
                    </p>
                  <!-- <iframe width="640" height="345" src="https://www.youtube.com/embed/ilFZ0FJnUJ4?autoplay=0&mute=0&controls=1">
                  </iframe> -->
                </div>
                <p>
                <div class="container-fluid">
                  <div class="row justify-content-between">
                    <div class="col-1">
                      <a class="bg-light text-decoration-none text-start fw-bold" href="#">Prev</a>
                    </div>
                    <div class="col-1">
                      <a class="bg-light text-decoration-none text-end fw-bold" href="{{ route('page2') }}">Next</a>
                    </div>
                  </div>
                </div>
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
  @include('layouts/dashPages.footer')
</footer>

<script src="archjs.js"></script>
<script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>