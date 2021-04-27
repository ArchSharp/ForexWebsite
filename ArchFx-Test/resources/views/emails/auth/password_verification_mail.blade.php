@component('mail::message')


Hello {{$user->firstname}},

@component('mail::button', ['url' => route('verify_passreset',$user->token)])
Clcik here to verify password change
@endcomponent

<p>Or copy and paste the following link on your web browser to verify password change</p>
<p>
    <a href="route('verify_passreset',$userpassreset->token)">
        {{route('verify_passreset',$user->token)}}
    </a>
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
