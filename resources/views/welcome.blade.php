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
                        Para resolver esse teste, me ajude com ferramentas como bootstrap. Criar uma solução laravel jetstrea, olhar a documentação e me dá um projeto inicial pronto para trabalhar com todas as minhas necessidades iniciais.
                        Inicialmente, trabalhe os campos do registro de login necessários para o teste, com os campos necessários anexados nas migrações. Faça as modificações necessárias para que funcione com os dados adicionados do frontend e do bakend.
                        Em seguida olhei a documentação do coinmarketcap, fiz testes no Postmand e comecei a realizar o Service para controlar a api coinmarketcap, configurar as variáveis ​​de ambiente, Controller e Service tudo de forma legível e escalável.
                        Então fiz a tabela para mostrar todos os dados de criptomoeda e dei o estilo necessário com a ajuda do Boostrap.
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
