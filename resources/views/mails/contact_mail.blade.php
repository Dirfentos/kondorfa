<x-mail::message>
# Kapcsolatfelvétel

Kedves Admin!

{{now()}} -kor, az alábbi {{Request::ip()}} IP címről megkeresés érkezett:

<b>Küldő adatai:</b>
- Vezettéknév: {{$data['last_name']}}
- Keresztnév: {{$data['first_name']}}
- email: {{$data['email']}}
- üzenet: <i>"{{$data['message']}}"</i>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Köszönettel,<br>
{{ config('app.name') }}
</x-mail::message>
