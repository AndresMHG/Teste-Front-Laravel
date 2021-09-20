<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="display-4">Desafio Intergalaxy SA: Teste prático para Frontend Developer</h1>
                    <p class="lead">
                        Este projeto visa medir o conhecimento sobre laravel tanto bakend quanto frontend. Meu conhecimento sobre blade laravel era pequeno, o conhecimento sobre bakend era um pouco mais.
                        Torne a estrutura o mais escalonável e organizada possível. <br>
                        Trabalhe com serviços, controladores, rotas, config php env e arquivo blade. <br>
                        Espero que goste do meu trabalho e tenha uma resposta o mais rápido possível.

                    </p>
                    <hr class="my-4">
                    <p class="lead">Andres Hernandez <br>
                    <a href="https://www.linkedin.com/in/andres-miguel-hernandez-garcia-b3786017b/">Perfil do Linkedin</a> <br>
                    <a href="https://github.com/AndresMHG">GitHub</a>
                    </p>

                  </div>
            </div>
        </div>
    </div>
</body>
</html>
