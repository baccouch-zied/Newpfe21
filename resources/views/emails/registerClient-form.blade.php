@component('mail::message')
# Création du compte client sur notre plateforme zarzis delivery :
<strong> Nom </strong> {{ $client['name'] }} <br/>
<strong> Prenom</strong> {{ $client['prenom'] }} <br/>
<strong> Email</strong> {{ $client['email'] }} <br/>
<strong> Telephone</strong> {{ $client['telephone'] }} <br/>

@component('mail::button', ['url' => route('login')])
Validation du compte
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
