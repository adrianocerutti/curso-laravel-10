<x-mail::message>
# Parabéns, você recebeu um novo lead

<p>
    Nome: {{ $data['name'] }}<br>
    Telefone: {{ $data['tel'] }}<br>
    E-mail: {{ $data['email'] }}
</p>

<x-mail::button :url="'https://github.com/adrianocerutti'">
Acesse meu github clicando aqui
</x-mail::button>

{{ date('d/m/Y') }},<br>
{{ config('app.name') }}
</x-mail::message>
