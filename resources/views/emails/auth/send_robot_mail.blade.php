@component('mail::message')

Hello {{$user->name}}, <br>
@component('mail::panel')
<span class="text-primary fw-bolder">ArchFxGlobe Ltd</span> welcome you to the world of Forex. <br>
Complete your registration and lets get <span class="text-decoration-underline text-primary fw-bolder">started</span>. <br>
@endcomponent


<p>
    Thank you.
</p>

Regards,<br>
{{ config('app.name') }} Support.
@endcomponent