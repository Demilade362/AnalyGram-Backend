<x-mail::message>
# Reset Your Password

Kindly click on the button to reset your password.

<x-mail::button :url="$url" color="success">
Reset Your Password
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
