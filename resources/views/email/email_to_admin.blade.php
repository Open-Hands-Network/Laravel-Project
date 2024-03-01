@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}
Message: {{ $mess }}
Thanks,
{{ config('app.name') }}
@endcomponent