<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchFX - Ease your Forex trading</title>
    
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
     <script type="text/javascript" src="/js/archjs.js" defer></script> 
     <script type="text/javascript" src="/js/app.js" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
    <link rel="stylesheet" type="text/css" href="/css/archstyle.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    @component
    <div class="container">
        <div class="row">
            <div class="col-fluid border bg-light">
                <h5 class="mx-auto" style="width: 100px;"><img src="https://archfxglobe.com/images/fxGlobe.gif../images/fxGlobe.gif" alt="LOGO" style="width:30px; "></h5>
                <div class="container">
                    <div class="row">
                        <div class="col bg-white mt-3 mb-3 me-5 ms-5">
                            Hello {{$user->firstname}}, <br>
    
                            <span class="text-primary fw-bolder">ArchFxGlobe Ltd</span> is welcoming you to the world of Forex. <br>
                            Complete your registration and lets get <span class="text-decoration-underline text-primary fw-bolder">started</span>. <br>
    
                            @component('mail::button', ['url' => route('verify_email',$user->email_verification_code)])
                            Clcik here to verify your email address
                            @endcomponent
    
                            <p>Or copy and paste the following link on your web browser to verify your email address</p>
                            <p>
                                <a href="route('verify_email',$admin->email_verification_code)">
                                    {{route('verify_email',$user->email_verification_code)}}
                                </a>
                            </p>
    
                            Thanks,<br>
                            {{ config('app.name') }}.
                        </div>
                    </div>
                </div>
                <div class="mx-auto" style="width: 100px;">
                    <span class="text-muted" >
                        &copy; <?php
                        $thisYear = (int)date('Y');
                        echo $thisYear;?> ArchFxGlobe Ltd. All rights reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endcomponent

</body>

</html>