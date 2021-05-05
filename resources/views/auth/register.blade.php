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

<section style="margin-top: 100px;">
  <div class="container card my-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-center">Register</h5>
          <form action="{{ route('auth.save') }}" class="mt-5 form-inline" name="home" id="home" method="post">
            
            @if(Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(Session::get('fail'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif


            @csrf
            <div class="input-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter First Name" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confFNameError">First name cannot be empty</div>
            <div class="input-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Last Name" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confLNameError">Last name cannot be empty</div>
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
              <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confemailError">Email cannot be empty</div>
            <div class="input-group">
              <input onkeyup="active()" type="password" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Password" id="pswrd_1" name="password" required>
            </div>
            <div class="input-group">
              <input onkeyup="active_2()" type="password" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Confirm Password" id="pswrd_2" name="confirm_password" required disabled>
              <div class="input-group-append">
                <button class="btn btn-outline-none d-none fw-bold text-primary show" type="button" id="decide">Show</button>
              </div>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confPassError"></div>
            <button onclick="pass1equalpass2()" type="submit" class="btn btn-primary disabled spSignUp">Sign Up</button>
            <p class="mt-3"> Already have an account? <a href="{{ route('auth.login') }}">Sign In</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section start -->
<footer class="footer other mt-1 py-1 bg-light">
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
<script>
  const pswrd_1 = document.querySelector("#pswrd_1");
  const pswrd_2 = document.querySelector("#pswrd_2");
  const firstname = document.querySelector("#firstname");
  const lastname = document.querySelector("#lastname");
  const email = document.querySelector("#email");
  const confPassError = document.querySelector(".confPassError");
  const confFNameError = document.querySelector(".confFNameError");
  const confLNameError = document.querySelector(".confLNameError");
  const confemailError = document.querySelector(".confemailError");
  const btn = document.querySelector("button");
  const showBtn = document.querySelector(".show");
  

function active(){
    if(pswrd_1.value.length >= 6){
        $('.spSignUp').removeClass("disabled");
        pswrd_2.removeAttribute("disabled", "");
    }else{
      $('.spSignUp').addClass("disabled");
      pswrd_2.setAttribute("disabled", "");
    }
}

//confPassError.onclick = 
function pass1equalpass2(){
  if(pswrd_1.value != pswrd_2.value){
    $('.confPassError').removeClass("d-none");
    $('.confPassError').removeClass("alert-success");
    $('.confPassError').addClass("alert-danger");
    $('.confPassError').addClass("d-flex");
    confPassError.style.display = "block";
    confPassError.textContent = "Password not matched";
  }else if(pswrd_1.value === pswrd_2.value){
    $('.confPassError').removeClass("d-none");
    $('.confPassError').removeClass("alert-danger");
    $('.confPassError').removeClass("text-danger");
    $('.confPassError').addClass("alert-success");
    $('.confPassError').addClass("d-flex");
    confPassError.style.display = "block";
    confPassError.textContent = "Password matched";
  }
  if(firstname.value != ""){
    $('.confFNameError').addClass("d-none");
    confFNameError.textContent = "";
  }else{
    $('.confFNameError').removeClass("d-none");
    $('.confFNameError').addClass("alert-danger");
    $('.confFNameError').addClass("d-flex");
    confFNameError.textContent = "First name cannot be empty";
  }

  if(lastname.value != ""){
    $('.confLNameError').addClass("d-none");
    confLNameError.textContent = "";
  }else{
    $('.confLNameError').removeClass("d-none");
    $('.confLNameError').addClass("alert-danger");
    $('.confLNameError').addClass("d-flex");
    confFNameError.textContent = "Last name cannot be empty";
  }

  if(email.value != ""){
    $('.confemailError').addClass("d-none");
    email.textContent = "";
  }else{
    $('.confemailError').removeClass("d-none");
    $('.confemailError').addClass("alert-danger");
    $('.confemailError').addClass("d-flex");
    email.textContent = "Email cannot be empty";
  }
  
}



function active_2(){
  if(pswrd_2.value != ""){
    $('.show').removeClass("d-none");
    showBtn.style.display = "block";
    showBtn.onclick = function(){
      if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
        pswrd_1.type = "text";
        pswrd_2.type = "text";
        //document.getElementById('decide').innerText = "Hide";
        this.textContent = "Hide";
      }else{
        $('.show').removeClass("d-none");
        pswrd_1.type = "password";
        pswrd_2.type = "password";
        //document.getElementById('decide').innerText = "Show";
        this.textContent = "Show";
        
      }
    }
  }else{
      $('.show').addClass("d-none");
      showBtn.style.display = "none";
  }
}



</script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>