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
      <div class="col-md-4 d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
        <div>
          <i class="far fa-user-circle text-primary offset-3" style="font-size: 100px; margin-top: 70%;"></i>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-center">ROBOT ORDER</h5>
          <form class="mt-5 form-inline" name="home" id="makePaymentForm">
            
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
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Full Name" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confFNameError">Full name cannot be empty</div>
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
              <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confemailError">Email cannot be empty</div>
            <div class="input-group">
              <input type="number" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Amount " id="amount" name="amount" required>
            </div>
            <div class="input-group">
              <input type="number" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter mt4/mt5 acct number" id="accountnumber" name="accountnumber" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confPassError"></div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
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
<script>
          
  $(function () {
      $("#makePaymentForm").submit(function (e){
          e.preventDefault();
          //console.log("Well");
          var name = $("#name").val();
          var email = $("#email").val();
          var amount = $("#amount").val();
          var accountnumber = $("#number").val();
          //make payment
          makePayment(amount,email,accountnumber,name);
      });
  });
function makePayment(amount,email,phone_number,name) {
  FlutterwaveCheckout({
    public_key: "FLWPUBK_TEST-12f4a3cd7c403e30b4e10b9153ad75fd-X",//FLWPUBK-1d1226e0998b9786d64b87e1972964d9-X    is  for live environment
    tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",// for test FLWPUBK_TEST-12f4a3cd7c403e30b4e10b9153ad75fd-X
    amount,
    currency: "NGN",
    country: "NG",
    payment_options: " ",
    redirect_url: // specified redirect URL
    "https://archfxglobe.com",
    customer: {
      email,
      phone_number,
      name,
    },
    callback: function (data) {
      var transaction_id = data.transaction_id;
      //console.log(data);
      //make ajax request
      var _token = $("input[name='_token']").val();
      $.ajax({
          type: "POST",
          url: "{{URL::to('verify-payment')}}",
          data: {
            transaction_id,
            _token,
          },
          success: function (response){
            //console.log(Object.entries(response));
          }
      });
    },
    onclose: function() {
      // close modal
    },
    customizations: {
      title: "My store",
      description: "Payment for items in cart",
      logo: "https://s3-us-west-2.amazonaws.com/hp-cdn-01/uploads/orgs/flutterwave_logo.jpg?69",
    },
  });
}
</script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>