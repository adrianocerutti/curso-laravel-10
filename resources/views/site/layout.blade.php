<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Import Google Icon Font --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- css e javascript --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- css Materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

    {{-- navbar --}}
    @include('partials.navbar')

    {{-- slide --}}
    @include('partials.banner-slide')

    {{-- conteúdo principal --}}
    @yield('content')

    {{-- rodapé --}}
    @include('partials.footer')

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    {{-- javascript Materialize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/92dc36c1b6.js" crossorigin="anonymous"></script>
</body>
</html>