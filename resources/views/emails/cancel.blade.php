@component('mail::message')
<h2 class="text-danger">APPOINTMENT CANCELED</h2>
<p class="text-center"> Appointment Keeper World</p>

<p> Sorry, your Appointment Request has been canceled. Your chosen date is not available. Kindly book another appointment. </p>

Thanks you and stay safe!<br>
{{ config('app.name') }}
@endcomponent
