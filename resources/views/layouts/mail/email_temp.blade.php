<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
</head>

<body>

Hello {{$user->firstname}},

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
{{ config('app.name') }}
</body>

</html>



@component('mail::message')


Hello {{$user->firstname}},

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
{{ config('app.name') }}
@endcomponent
