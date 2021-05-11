<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts/dashPages.head')
</head>
<body>

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
                        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> ArchFxGlobe Ltd. All rights reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>