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
    <a class="navbar-brand" href="#" id="home"><img src="logos.jpg" alt="LOGO"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <h1 class="dropdown-header">Learn</h5>
                  <a class="dropdown-item" href="{{ route('gotoRegPage') }}">Forex</a>
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

            <!--                    home section                -->
<section id="home">
  <div class="container-fluid home">
    <div class="row">
      <div class="column ms-5" style="margin-top:200px;">
        <div class="text-1">Hello, my name is</div>
          <div class="text-2">ArchInfinity</div>
          <div class="text-3">I'm a <span class="typing"></span></div>
          <a class="btn btn-primary" href="#">Buy me</a>
      </div>
    </div>
  </div>
</section>

<!-- about section start -->
<section class="mt-5" id="about">
  <div class="container">
  <div class="row justify-content-center">
      <div class="col offset-5">
        <h2 class="about">About us</h2>
      </div>
  </div>
    <div class="row justify-content-center mt-1">
      <div class="col-5 mt-4 mb-3"><img src={{ asset("images/office.jpg") }} class="img-fluid img-thumbnail" alt=""></div>
      <div class="col ms-5 mt-4 mb-3" style="text-align: justify;">ArchFxGlobe is a Forex company ready to help with one of the most profitable strategies in the World!. We accomodate the three types of forex traders (Beginners, Intermediate, and Advanced traders).
                                      knowing that profitability in Forex can be difficult sometimes, we created super trading robot to help you trade profitably. Our indicators are also available for you.
                                      We can also help you convert your strategies to trading tools (i.e. Expert advisors (Robot), indicators, and scripts). We also provide VPS to host your Expert advisors.</div>
    </div>
</div>
</section>

<!-- begin testing api -->
 <main class="container-fluid">

  <div class="starter-template text-center py-5 px-3">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    <?php makeAPICall('https://www.myfxbook.com/api/login.json?email=raphael.tunji@yahoo.com&password=Ruth1///'); ?>
    
    <!-- 
      my session is zrqN7QMXubatiSRbIrN31985378
      https://www.myfxbook.com/api/login.json?email=raphael.tunji@yahoo.com&password=Ruth1///
      https://www.myfxbook.com/api/get-my-accounts.json?session=DSL07vu14QxHWErTIAFrH40 
      
    -->

</main>
        
</div>

        <?php 
              function makeAPICall($url){

                  
                  $handle = curl_init();

                  
                  // Set the url
                    curl_setopt($handle, CURLOPT_URL, $url);
                  // Set the result output to be a string.
                  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                  
                  $output = curl_exec($handle);
                  
                  curl_close($handle);
                  
                  echo $output;
               return $output;
              }
        ?>


<!-- end of testing api -->

<section id="products" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col offset-5">
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
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!--<img src="..." class="d-block w-100" alt="...">-->
            <div class="card-group">
              <div class="card">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!--<img src="..." class="d-block w-100" alt="...">-->
            <div class="card-group">
              <div class="card">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
                </div>
              </div>
              <div class="card ms-2 border">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <img class="card-img-top" src="https://widgets.myfxbook.com/widgets/8274046/large.jpg" alt="Widget" style="width:100%">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted"><a href="https://www.myfxbook.com/members/ArchRaphaelFx/saraphea613/8274046" class="btn btn-primary">See Results</a></small></p>
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
      <div class="col offset-5">
        <h2 class="user">User Review</h2>
      </div>
      <div class="row mt-3">
        <div class="col bg-light me-2 border-start border-primary border-2">
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
      <div class="col bg-light me-2 border-start border-primary border-2">
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
      <div class="col bg-light me-2 border-start border-primary border-2">
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
      <div class="col offset-5">
        <h2 class="contact">Contact us</h2>
      </div>
      <div class="row justify-content-center mt-1">
        <div class="col-5 mt-4 mb-3">
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
        <div class="col ms-5 mt-4 mb-3">
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