@component('mail::message')
Dear {{ $user->name }},

OpenPath solutions has created an O-Money account for you.

use the following credentials to login<br>
email: {{ $user->email }}<br>
password: {{ 123456 }}
@component('mail::button', ['url' => ''])
Click here to set password.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
