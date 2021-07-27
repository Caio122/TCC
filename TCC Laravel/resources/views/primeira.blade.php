@extends('layouts.primeiramain')

@section('title', 'The Flash')

@section('content')

<body>
    <!-- Cabeçalho com logo e login -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./img/logo.png" />
            </a>
            <div class="navbar-brand ml-auto">
                <button type="button" class="btn btn-info">Registre-se</button>
                <button type="button" class="btn btn-light">Login</button>
            </div>
        </div>
    </nav>

    <!-- Barra com as categorias, pesquisa e donate -->
    <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
        <a class="navbar-brand ml-auto" href="">
            <img src="./img/donate.png" />
        </a>
        <ul class="navbar-nav mr-auto px-5">
            <li class="nav-item">
                <a class="nav-link text-info" href="/noticias">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/forum">Fórum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/reviews">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/tutoriais">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/sobre">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input class="form-control form-control-sm bg-dark" type="search">
        </form>
    </nav>

    <!-- Começo do texto -->
    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <!-- Título do Texto -->
            <div class="content text-left my-5">
                <h1 class="title text-info">Título Da Notícia</h2>
                <!-- Subtítulo -->
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget fringilla nulla, sed tempus
                    diam. Nam dictum tellus et fermentum feugiat. In hac habitasse platea dictumst. Ut pharetra bibendum
                </p>
                <!-- Imagem do Texto -->
                <div class="text-center">
                    <img src="img/flash.jpg" class="img-fluid">
                </div>
            </div>
            <!-- Texto em si -->
            <div class="content">
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis lacinia laoreet. Pellentesque
                    vel quam est. Integer dapibus placerat ex. Curabitur vestibulum pretium leo ac condimentum.
                    Phasellus vitae hendrerit urna, sit amet maximus nisl. Sed egestas ipsum non dui convallis porta.
                    Nulla a eros a ante iaculis posuere quis a nisi. Phasellus rhoncus, mi eget auctor dapibus, arcu mi
                    accumsan libero, ac sodales lectus purus a ligula.

                    Nulla efficitur, dolor quis finibus condimentum, augue erat laoreet tellus, a tincidunt orci felis a
                    arcu. Nulla consectetur gravida accumsan. In mattis magna at arcu eleifend, sed pellentesque ex
                    accumsan. Proin id hendrerit odio. Quisque eu venenatis leo, sit amet mattis felis. In hac habitasse
                    platea dictumst. Curabitur sagittis sed elit tincidunt tempus. Vivamus bibendum neque vestibulum mi
                    facilisis laoreet. Proin non nisi fringilla, consequat diam eget, viverra eros.

                    Etiam sit amet lacus eros. Sed rutrum felis non sapien cursus, at interdum elit gravida. Mauris
                    vehicula mauris nibh, non tempus eros venenatis quis. Donec tincidunt non urna non pulvinar. Nunc
                    gravida elementum erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Nulla tincidunt ultrices mattis. Ut sit amet purus nec justo aliquet lacinia et
                    non nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Suspendisse viverra nisl vitae odio dapibus, a porta est aliquet. Sed at mi dignissim, pellentesque
                    mauris eu, condimentum massa. Praesent porttitor volutpat sapien ac vestibulum. Cras dapibus augue
                    id velit suscipit condimentum.
                </p>

            </div>
        </div>
    </div>
    <section class="footer border-top border-info">
        <div class="container ml-1 mt-2">
            <ul>
                <li class="grid-8">
                    <p class="text-info">
                        <img src="./img/logo-ape.png" width="30" height="35" alig="left">
                        2021-2021 Digital Monkey |
                        Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos
                        proprietários
                    </p>
            </ul>
        </div>
        </li>
    </section>






    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>


</body>

</html>

@endsection
