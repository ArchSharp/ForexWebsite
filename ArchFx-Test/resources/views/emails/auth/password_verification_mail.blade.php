@component('mail::message')


Hello {{$user->firstname}},

@component('mail::button', ['url' => route('verify_passreset',$user->token)])
Clcik here to verify password change
@endcomponent

<p>Or copy and paste the following link on your web browser to verify password change</p>
<p>
    <a href="route('verify_email',$admin->email_verification_code)">
        {{route('verify_email',$user->token)}}
    </a>
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
