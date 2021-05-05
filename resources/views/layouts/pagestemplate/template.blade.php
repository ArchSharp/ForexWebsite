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
                @yield('content')

                
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