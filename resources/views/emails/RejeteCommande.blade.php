@component('mail::message')
# Votre commande est réjeté , désolé cher client  :
<strong> Nom </strong> {{ $request['nom'] }} <br/>
<strong> Raison</strong> {{ $request['raison'] }} <br/>

Merci, pour votre compréhension<br>
{{ config('app.name') }}
@endcomponent
