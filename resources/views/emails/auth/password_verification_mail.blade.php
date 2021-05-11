@component('mail::message')

Dear {{$check->firstname}}, <br>
@component('mail::panel')
You requested for a <span class="text-primary fw-bolder">Password reset</span>. kindly ignore/delete this mail 
if the request was not made by you or if you change your mind <br>
<span class="text-decoration-underline text-primary fw-bolder">See below</span>. <br>
@endcomponent

@component('mail::button', ['url' => route('verify_passreset',$user->token)])
Clcik here to verify password reset
@endcomponent

<p>Or copy and paste the following link on your web browser to verify password reset</p>
<p>
    <a href="route('verify_passreset',$userpassreset->token)">
        {{route('verify_passreset',$user->token)}}
    </a>
</p>
<p>
    Thank you.
</p>

Regards,<br>
{{ config('app.name') }} Support.
@endcomponent
