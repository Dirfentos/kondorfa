<x-mail::message>
# Kapcsolatfelvétel

Kedves Admin!

{{now()}} -kor, az alábbi {{Request::ip()}} IP címről megkeresés érkezett:

<b>Küldő adatai:</b>
- Vezettéknév: {{$last_name}}
- Keresztnév: {{$first_name}}
- email: {{$email}}
- üzenet: <i>"{{$message}}"</i>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
