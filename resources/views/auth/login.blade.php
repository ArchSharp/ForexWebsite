<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts/dashPages.head')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary fw-bolder">
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
          </ul>
        </div>
  </div>
</nav>

<section style="margin-top: 200px;">
  <div class="container card my-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4 d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
        <div>
          <i class="far fa-user-circle text-primary offset-3" style="font-size: 100px; margin-top: 60%;"></i>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-center">Login</h5>
          <form action="{{ route('auth.check') }}" class="mt-5 form-inline" name="home" id="home" method="post">
            
            @if(Session::get('fail'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            
            @csrf
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
              <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror border-start-0 border-end-0 border-top-0" placeholder="Enter Password" id="password" name="password" required>
              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="{{ route('auth.resetpassword') }}" class="text-primary">Forgot Password?</a>
            <p class="mt-3"> Don't have an account? <a href="{{ route('auth.register') }}">Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section start -->
<footer class="footer other mt-auto py-3 bg-light">
  @include('layouts/dashPages.footer')
</footer>

<script src="archjs.js"></script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>