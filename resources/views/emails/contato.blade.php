<x-mail::message>
# Mensagem de {{ $data['name'] }}

<x-mail::panel>
    Lembre-se de responder o cliente o mais rápido possível.<br>
    Att: À direção.
</x-mail::panel>

E-mail: {{ $data['email'] }}<br>
Mensagem:<br>
{{ $data['message'] }}

<x-mail::button :url="'https://github.com/adrianocerutti'">
Acesse meu github clicando aqui
</x-mail::button>

{{ date('d/m/Y') }},<br>
{{ config('app.name') }}
</x-mail::message>
