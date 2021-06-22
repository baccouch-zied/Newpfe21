@component('mail::message')
#Reponse à votre message par Zarzis Delivery  :
<strong> Reponse </strong> {{ $request['reponse'] }} <br/>

Merci,<br>
{{ config('app.name') }}
@endcomponent
