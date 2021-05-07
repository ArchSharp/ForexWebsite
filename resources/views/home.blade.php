<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts/dashPages.head')
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top bg-primary fw-bolder onlyhome">{{-- navbar-light navbar-dark --}}
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="../images/fxGlobe.gif" alt="LOGO" style="width:30px; ">ArchFxGlobe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          @if(isset( $LoggedUserInfo['firstname']))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">{{ $LoggedUserInfo['firstname'] }}</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown10">
                  <a class="dropdown-item" aria-current="page" href="{{ route('admin.dashboard') }}">Dasboard</a>
                  <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Log Out</a>
                  <a class="dropdown-item" aria-current="page" href="{{ route('auth.resetpassword') }}">Reset Password</a>
                </ul>
            </li>
          @elseif(!isset($LoggedUserInfo['firstname']))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
          @endif
            
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <h1 class="dropdown-header">Learn</h1>
                
                  @if(isset( $LoggedUserInfo['firstname']))
                      <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Forex</a>
                      <a class="dropdown-item" href="{{ route('admin.dashboard') }}">MQL4</a>
                  @elseif(!isset($LoggedUserInfo['firstname']))
                      <a class="dropdown-item" href="{{ route('auth.register') }}">Forex</a>
                      <a class="dropdown-item" href="{{ route('auth.register') }}">MQL4</a>
                  @endif
                                  
                <h1 class="dropdown-header">Freelance</h1>
                  <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Indicator">indicators</a>
                  <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Expert Advisor">Expert advisors</a>
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

<!--              Modal                     -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Build your Indicator & Expert advisor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('auth.sendJob') }}" method="post" enctype="multipart/form-data" id="uploadfile">

          @csrf
          <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
          <div class="row g-3">
            <div class="col">
              <input type="text" class="form-control subject" id="recipient-name" name="subject" readonly="readonly" onfocus="blur();">
            </div>
            <div class="col">
              <input type="file" name="filename[]" id="fileToUpload" multiple>
            </div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Strategy Description:</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="uploadfile" class="btn btn-primary" name="submit">Send Job</button>
      </div>
    </div>
  </div>
</div>
<!--              End of Modal                     -->

<!-- modal for buying -->
<div class="modal fade" id="buymodal" tabindex="-1" aria-labelledby="buymodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <table class="table table-responsive caption-top">
          <caption><span class="fs-4">EA ( Robot )</span>  - Buy one and make money while you sleep</caption>
          <thead>
            <tr>
              <th scope="col">Requirements</th>
              <th scope="col">AIsCapital</th>
              <th scope="col">AImCapital</th>
              <th scope="col">AIbCapital</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Price ( $ )</th>
              <td>100</td>
              <td>300</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Monthly ROI</th>
              <td>>= 10%</td>
              <td>>= 10%</td>
              <td>>= 10%</td>
            </tr>
            <tr>
              <th scope="row">Minimum Capital ( $ )</th>
              <td>50</td>
              <td>300</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">Expiry</th>
              <td>6 months</td>
              <td>1 year</td>
              <td>Life Time</td>
            </tr>
            <tr>
              <th scope="row">Capital Protection</th>
              <td>
                  <i class="fa fa-star text-success" aria-hidden="true"></i>
                  <i class="fa fa-star text-success" aria-hidden="true"></i>
                  <i class="fa fa-star text-success" aria-hidden="true"></i>
                  <i class="fa fa-star text-success" aria-hidden="true"></i>
                  <i class="fa fa-star text-success" aria-hidden="true"></i>
              </td>
              <td>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
              </td>
              <td>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
                <i class="fa fa-star text-success" aria-hidden="true"></i>
              </td>
            </tr>
            <tr>
              <th scope="row">Verified by</th>
              <td><a href="#">MyFxBook</a></td>
              <td><a href="#">MyFxBook</a></td>
              <td><a href="#">MyFxBook</a></td>
            </tr>
            <tr>
              <th scope="row">Currency Pair</th>
              <td>EURUSD</td>
              <td>EURUSD</td>
              <td>EURUSD</td>
            </tr>
            <tr>
              <th scope="row">Accuracy</th>
              <td>> 90%</td>
              <td>> 90%</td>
              <td>> 90%</td>
            </tr>
            <tr>
              <th scope="row">Buy and Smile</th>
              <td><a href="https://flutterwave.com/pay/archfxglobeltdzauw" class="btn btn-primary btn-sm" tabindex="-1" role="button">PAY WITH FLUTTERWAVE</a></td>
              <td><a href="https://flutterwave.com/pay/archfxglobeltdzauw" class="btn btn-primary btn-sm" tabindex="-1" role="button">PAY WITH FLUTTERWAVE</a></td>
              <td><a href="https://flutterwave.com/pay/archfxglobeltdzauw" class="btn btn-primary btn-sm" tabindex="-1" role="button">PAY WITH FLUTTERWAVE</a></td>
            </tr>
          </tbody>
        </table>  
      </div>
    </div>
  </div>
</div>
<!-- end of modal forbuying -->

            <!--                    home section                -->
<section id="home">
  <div class="container-fluid home">
    <div class="row">
      <div class="col offset-2 position-fixed" style="margin-top:200px;">
        <div class="text-1">Hello, my name is</div>
          <div class="text-2">ArchInfinity</div>
          <div class="text-3">I'm a <span class="typing text-info"></span></div>
          <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#buymodal" data-bs-whatever="Indicator">Buy me</a>
        </div>
      </div>
      <div class="col ms-5" style="margin-top:70px;">
        <form action="{{ route('auth.sendJob') }}" method="post" enctype="multipart/form-data" id="uploadfile">
  
          @if(Session::get('success'))
            <div class="alert alert-success fixed-top-alert alert-dismissible fade show" role="alert">
              {{ Session::get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
  
          @if(Session::get('fail'))
            <div class="alert alert-danger fixed-top-alert alert-dismissible fade show" role="alert">
              {{ Session::get('fail') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
  
          @csrf
        </form>
      </div>
    </div>
  </div>
</section>

<!-- about section start -->
<section class="mt-5" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col text-center text-md-right">
        <h2 class="about">About us</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-1">
      <div class="col-sm mt-4 mb-3">
        <img src={{ asset("images/office.jpg") }} class="img-fluid img-thumbnail" alt="">
      </div>
      <div class="col-sm ms-5 mt-4 mb-3" style="text-align: justify;">
        ArchFxGlobe is a Forex company ready to help with one of the most profitable strategies in the World!. We accomodate the three types of forex traders (Beginners, Intermediate, and Advanced traders).
        knowing that profitability in Forex can be difficult sometimes, we created super trading robot to help you trade profitably. Our indicators are also available for you.
        We can also help you convert your strategies to trading tools (i.e. Expert advisors (Robot), indicators, and scripts). We also provide VPS to host your Expert advisors.
      </div>
    </div>
  </div>
</section>

<!-- begin testing api -->
 <main class="container-fluid">

    <div class="starter-template text-center py-5 px-3">
      <h1>Recommended Broker</h1>
      <h4 class="underline text-primary fw-bold text-decoration-underline">FXTM</h4>
      <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      <?php //makeAPICall("https://www.myfxbook.com/api/login.json?email=raphael.tunji@yahoo.com&password=Ruth1///"); ?>
        <!-- https://www.myfxbook.com/api/login.xml?email=elvis@yahoo.com&password=letsboogie
        my session is zrqN7QMXubatiSRbIrN31985378
        https://www.myfxbook.com/api/login.json?email=raphael.tunji@yahoo.com&password=Ruth1///
        https://www.myfxbook.com/api/get-my-accounts.json?session=DSL07vu14QxHWErTIAFrH40-->
    </div>
  </main>

            <?php
              function makeAPICall($url){
                  $handle = curl_init();
                  // Set the url
                  curl_setopt($handle, CURLOPT_URL, $url);
                  // Set the result output to be a string.
                  curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
                  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                  $output = curl_exec($handle);
                  echo $output;
                  curl_close($handle);
                  
                  return $output;
              }
            ?>


<!-- end of testing api -->

<section id="products" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col text-center text-md-right">
        <h2 class="user">Our Products</h2>
      </div>
    </div>
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel" data-interval="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!--<img src="..." class="d-block w-100" alt="...">-->
            <div class="card-group">
              <div class="card">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363063/large.jpg" alt="Widget" style="width:100%">
                {{-- <iframe frameborder="0" width="100%" height="140" src="https://www.mql5.com/en/signals/widget/signal/5cug?f=0"></iframe> --}}
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aibigcapital/8363063" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363076/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aimedcapital/8363076" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363086/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aismallcapital/8363086" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!--<img src="..." class="d-block w-100" alt="...">-->
            <div class="card-group">
              <div class="card">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363063/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aibigcapital/8363063" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363076/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aimedcapital/8363076" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363086/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aismallcapital/8363086" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!--<img src="..." class="d-block w-100" alt="...">-->
            <div class="card-group">
              <div class="card">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363063/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aibigcapital/8363063" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363076/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aimedcapital/8363076" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8363086/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/aismallcapital/8363086" class="btn btn-primary" target="_blank">See Results</a></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>-->
        <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>-->
      </div>
    </div>
  </div>
</section>

<!-- Testimonies -->
<section id="testimonies" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col text-center text-md-right">
        <h2 class="user">User Review</h2>
      </div>
      <div class="row mt-3">
        <div class="col-sm bg-light me-2 border-start border-primary border-2">
          <p class="py-5 px-3">Your robot is among the top ten list of best robot in the Forex industry, thanks for the intelligent work put into the Expert advisor<br>
            <br>
              <span class="text-muted">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> - Phillip, 
                Virginia USA.
              </span>
          </p>
        </div>
        <div class="col-sm bg-light me-2 border-start border-primary border-2">
          <p class="py-5 px-3">Genuinely reliable. I have been using this Robot for quite some time and I have never had my account blown.<br>
            <br>
              <span class="text-muted">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> - Raphael, 
                Lagos Nigeria.
              </span>
          </p>
        </div>
        <div class="col-sm bg-light me-2 border-start border-primary border-2">
          <p class="py-5 px-3">Without a doubt, this is a good Robot. Always close daily with profit, it gives at least 10% ROI on a monthly basis.<br>
            <br>
              <span class="text-muted">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> - Paul, 
                California USA.
              </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact us -->
<section id="contactUs" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col text-center text-md-right">
        <h2 class="contact">Contact us</h2>
      </div>
      <div class="row justify-content-center mt-1">
        <div class="col-sm mt-4 mb-3">
          <h4>Get in touch</h4>
          <p>
            Pay us visit using our Office address below. Note: Visit should be made in-case of high priority issues.
          </p>
          <div class="row mt-4">
            <div class="col-2"><i class="fas fa-user"></i></div>
            <div class="col">ArchFxGlobe Ltd.</div>
          </div>
          <div class="row mt-3">
            <div class="col-2"><i class="fas fa-map-marker-alt"></i></div>
            <div class="col">16 Freetown Georgia, US.</div>
          </div>
          <div class="row mt-3">
            <div class="col-2"><i class="fas fa-envelope"></i></div>
            <div class="col">support@ArchFxGlobe.com</div>
          </div>
        </div>
        <div class="col-sm ms-5 mt-4 mb-3">
          <form class="form-inline" name="home" id="home" method="post" action="{{url('store-form')}}">
           @csrf
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror" placeholder="Enter name" id="name" name="name" required>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <input type="email" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror" placeholder="Enter email" id="email" name="email" required>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 @error('title') is-invalid @enderror" placeholder="Enter subject" id="subject" name="subject" required>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="form-group">
              <textarea type="text" class="form-control mb-2 @error('title') is-invalid @enderror" rows="5" id="comment" placeholder="Enter message" name="message" required></textarea>
              @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            
            <!--<input type="email" class="form-control mb-2 mr-sm-2" placeholder="Enter email" id="email">
            <input type="subject" class="form-control mb-2 mr-sm-2" placeholder="Enter subject" id="subject">
            <textarea class="form-control mb-2" rows="5" id="comment"></textarea>-->
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </form> 
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section start -->
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm text-center">
        <span class="text-muted">
          &copy; <?php
          $fromYear = 2018;
          $thisYear = (int)date('Y');
          echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> ArchFxGlobe Ltd.
        </span>
        <span class="ms-4"><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy policy</a></span>
        <span class="ms-4"><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of reference</a></span>
      </div>
    </div>
  </div>
</footer>

<!-- modal for  privacy policy-->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OUR PRIVACY POLICY</h5>
      </div>
      <div class="modal-body">
        <div class="col">
          <ol>
            Every user is entitled to 2 MT4 account activation. In any case your previous account is no longer been used, we can deactivate the old MT4 account number and grant license on the new account. This offer is available only ones. <br> <br>
            PURPOSE OF THIS PRIVACY POLICY <br> <br>

            This Policy aims to define the process how ARCHFXGLOBE collects and processes personal data of the Clients through the use of ARCHFXGLOBE.com (hereinafter referred to as the “Website”), including any data the Client may provide through the Website when providing or summiting any information thereto. <br>
            <br>
            This Website is not intended for children and no data related to children may be collected.
            <li> DATA CONTROLLER</li>

            ARCHFXGLOBE is the controller and responsible person/entity for Client’s personal data. It is important that the personal data the Company holds about the Client is accurate and current. The obligation to inform the Company about any changes in personal data will be on Client’s side.
            <li>DATA COLLECTED</li>

            Personal data, or personal information, means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data). The Company may collect, use, store and transfer different kinds of personal data about the Client which we have grouped together follows:

            Identity Data includes first name, maiden name, last name, username or similar identifier.
            Contact Data includes email address and telephone numbers.
            Technical Data includes internet protocol (IP) address, Client’s login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices the Client uses to access this website.
            Profile Data includes the username and password of the Client, his interests, preferences, feedback and survey responses.
            Usage Data includes information about how you use our website, products and services.
            Marketing and Communications Data includes preferences of the Client in relation to receiving marketing from the Company and its third parties and respective communication preferences.
            Automated technologies or interactions. As the Client interacts with the Website, his Technical Data about his equipment, browsing actions and patterns may be collected automatically. The Company collects such personal data by using cookies, server logs and other similar technologies. Technical Data about the Client may also be requested if such Client visits other websites by employing cookies of the Company. 

            <li>HOW THE COMPANY USES PERSONAL DATA OF THE CLIENTS</li>

            Client’s personal data will be used only in case where the law allows the Company to do so. Most commonly, we will use Client’s personal data in the following circumstances:

            Where there is a need to perform the agreement (concluded or in a process of conclusion with the Client).
            Where it is necessary for Company’s legitimate interests (or those of a third party) and if such interests and fundamental rights do not override these interests.
            Where the Company shall comply with a legal or regulatory obligation.

            In general, the Company does not rely on respective consent, forming a legal basis for processing of Client’s personal data, other than in relation to sending third party direct marketing communications to you via email or text message. The Client has the right to withdraw his consent to marketing purposes at any time by contacting the Company via mail to info@ARCHFXGLOBE.com
            <li>PURPOSES FOR WHICH THE COMPANY USES PERSONAL DATA OF THE CLIENTS</li>

            Client’s personal data may be processed for more than one lawful ground depending on the specific purpose for which we are using your data. If necessary, the Client shall contact the Company via mail to info@ARCHFXGLOBE.com for the purpose of obtaining necessary details about the specific legal ground the Company relies on to process his personal data where more than one ground has been set out.
            <li>DISCLOSURE OF CLIENT’S PERSONAL DATA</li>

            The Company may share Client‘s personal data with third parties for the purpose of carrying out its services related to ARCHFXGLOBE properly. Security of Client‘s personal data shall be fully respected by such third parties and treated in accordance with the law. Such Client‘s personal data may not be used by third parties for their own purposes while they may be processed only for specified purposes by the Company and in accordance with Company‘s instructions. Such providers are: <br>

            Paystack Inc. www.paystack.com
            Coinbase Commerce Inc. www.coinbase.com
          </ol>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end for privacy policy -->

<!-- modal for  terms and condition-->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TERMS OF REFERENCE</h5>
      </div>
      <div class="modal-body">
        <div class="col">
          
          <ol>
            <li>No professional advice or investment recommendation.</li>
            Any recommendations on the website should not be considered as a solicitation to buy or an offer to sell. The recommendations are not individual recommendations to a specific user. ARCHFXGLOBE is not an investment adviser, therefore, any trade ideas or signals should not be taken as investment advice. The users are solely responsible for the investment decisions they make. Users should consult a tax professional or attorney to understand their tax or legal obligations.
            <li>No refund policy.</li>
            The licensed ARCHFXGLOBE indicator and scanner is a lifetime license activation product and cannot be deactivated once it has been licensed to your MT4 account number. The licensed cannot be transfered from one MT4 account number to the other. It is a virtual digital product that cannot be returned and therefore is nonrefundable.
            <li>Access to website.</li>
            The website, or any part of it, may not be duplicated, copied, used, or otherwise exploited for any commercial mean without our express, written permission. You may not use any framing techniques to acquire any logo, trademark or other proprietary content (textual, images, text, layouts or forms) of our website without our prior written approval.
            <li>Website policies.</li>
            ARCHFXGLOBE reserves the right to make changes to the website, policies, and terms of use at any given time and does not need to inform its users when doing so. It is the responsibility of the members to check the privacy policy and terms of use frequently to see any recent changes.
            <li>Limited warranties.</li>
            We do not warrant the completeness or accuracy of the information published on this website; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.
            <li>Limitations and exclusions of liability</li>
            ARCHFXGLOBE will not be responsible to any fraud activities carried out by anybody direct or indirect with any product, item, material or information from this website. We are not liable for any wrong interpretation, distributing or sharing of information from this website. We will not be liable to you in respect of any losses arising out of any event or events beyond our reasonable control. We will not be liable to you in respect of any business losses, including (without limitation) loss of or damage to profits, income, revenue, use, production, anticipated savings, business, contracts, commercial opportunities or goodwill. Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
            <li>High risk investment.</li>
            Trading foreign exchange on margin carries a high level of risk, and may not be suitable for all investors. The high degree of leverage can work against you as well as for you. Before deciding to trade foreign exchange, you should carefully consider your investment objectives, level of experience, and risk appetite. The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not invest money that you cannot afford to lose. You should be aware of all the risks associated with foreign exchange trading, and seek advice from an independent financial advisor if you have any doubts.
            <li>Disclaimer.</li>
            All information posted on this website is of our opinion and the opinion of reviewers, and may not reflect the truth. Please use your own good judgment and use common sense as well as seeking advice from a qualified consultant before believing and accepting any information posted on this website.
            <li>Changes to this Statement.</li>
            ArchFxGlobe.com will occasionally update this Terms of Service to reflect company and customer feedback. ARCHFXGLOBE.com encourages you to periodically review this Statement to be informed of how ARCHFXGLOBE.com is protecting your information. All of these terms are subject to change without notice. Changes will be posted on this page.
          </ol>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end for terms and condition -->


{{-- <script src="/js/archjs.js"></script> --}}
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>