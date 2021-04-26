@extends('layouts.welcomemain')

@section('title', 'Digital Monkey')

@section('content')

    <header class="cabecalho">
        <main>
            <div class="header-1">
                <div class="logo-1">
                    <a href="" alt="macaco">
                    <img src="/img/logo-ape.png">
                    </a>
                </div>
                <div class="logo-2">
                    <a href="">
                    <img src="/img/logo.png" alt="digital monkey">
                    </a>
                </div>
                <div class="cadastro">
                    <ul>
                        <li>
                            <a href="">
                                <img src="/img/registre.png">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="/img/login.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/noticias">Notícias</a>
                    </li>

                    <li>
                        <a href="/reviews">Reviews</a>
                    </li>

                    <li>
                        <a href="/tutoriais">Tutoriais</a>
                    </li>
                    
                    <li>
                        <a href="/forum">Fórum</a>
                    </li>
                </ul>
            </div>
            <div class="busca">
                <input type="text" />
            </div>
            <div class="donate">
                <a href="">
                    <img src="/img/donate.png">
                </a>
            </div>
        </div>
    </main>

@endsection
