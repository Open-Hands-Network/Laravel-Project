@component('mail::message')
# Hi {{ $name }},
# {{ $senderMessage }}
Received your email and We will try answer quickly.
Thanks,
{{ config('app.name') }}
@endcomponent