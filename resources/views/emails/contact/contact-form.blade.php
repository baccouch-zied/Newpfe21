@component('mail::message')
# Message d'un client par la formulaire contact :
<strong> Nom</strong> {{ $validatedData['name'] }} <br/>
<strong> Email</strong> {{ $validatedData['email'] }} <br/>

<strong> Message</strong>

{{ $validatedData['message'] }}

@endcomponent
