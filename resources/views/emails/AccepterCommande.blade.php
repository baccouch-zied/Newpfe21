@component('mail::message')
# Votre commande est accepté , elle va être livré dans 30 min max  :
<strong> Nom </strong> {{ $request['nom'] }} <br/>
<strong> Message</strong> {{ $request['message'] }} <br/>

Merci, pour votre confiance<br>
{{ config('app.name') }}
@endcomponent
