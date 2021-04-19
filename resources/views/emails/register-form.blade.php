@component('mail::message')

# Message d'un inscription de restaurants sur notre plateforme zarzis delivery :
<strong> Nom du restaurant</strong> {{ $userrestaurant['name'] }} <br/>
<strong> Email</strong> {{ $userrestaurant['email'] }} <br/>
<strong> Telephone</strong> {{ $userrestaurant['telephone'] }} <br/>

@component('mail::button', ['url' => route('login')])
Validation du compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
