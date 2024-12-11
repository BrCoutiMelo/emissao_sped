<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sistema de Notas')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Inclua seu CSS -->
</head>
<body>
    <nav>
        <!-- Adicione sua barra de navegação aqui, se necessário -->
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script> <!-- Inclua seu JavaScript -->
</body>
</html>
