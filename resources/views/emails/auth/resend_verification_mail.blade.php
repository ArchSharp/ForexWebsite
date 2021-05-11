@component('mail::message')

Hello {{$user->firstname}}, <br>
@component('mail::panel')
<span class="text-primary fw-bolder">ArchFxGlobe Ltd</span> is welcome you to the world of Forex. <br>
Complete your registration and lets get <span class="text-decoration-underline text-primary fw-bolder">started</span>. <br>
@endcomponent

@component('mail::button', ['url' => route('verify_email',$user->email_verification_code)])
Clcik here to verify your email address
@endcomponent

<p>Or copy and paste the following link on your web browser to verify your email address</p>
<p>
    <a href="route('verify_email',$admin->email_verification_code)">
        {{route('verify_email',$user->email_verification_code)}}
    </a>
</p>
<p>
    Thank you.
</p>

Regards,<br>
{{ config('app.name') }} Support.
@endcomponent