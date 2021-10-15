@extends('layouts.app')
@section('title', 'Digital Monkey')

@section('content')

    <!-- Começo das notícias -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de notícias -->
            <div class="col-sm-5 mx-auto">
                <!-- Notícias em si -->
                <div class="card-post mb-5">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img1.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">MOMENTO CHEGOU A SER GRAVADO</h6>

                            <h4 class="card-title text-white">WandaVision| Cena deletada traria um demônio, revela
                                diretor
                            </h4>
                        </a>
                    </div>

                </div>
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>

                </div>
            </div>
            <!-- Segundo coluna de notícias -->
            <div class="col-sm-5 mx-auto">
                <!-- Notícias em si-->
                <div class="card-post mb-5">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img1.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">MOMENTO CHEGOU A SER GRAVADO</h6>

                            <h4 class="card-title text-white">WandaVision| Cena deletada traria um demônio, revela
                                diretor
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Começo de Mais Lidas -->
        <div class="row bg-dark">
            <h2 class="text-info text-nowrap my-2 ml-4">
                Mais Lidas:
            </h2>

        </div>
        <div class="row bg-dark">
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

@endsection
