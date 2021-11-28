@component('mail::message')
# Email Verification

Hello {{ $name }},

You registered an account on {{ config('app.name') }}, before being able to use your account you need to verify that this is your
email address by clicking here:

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent