@extends('layouts.app')

@section('title', 'Digital Monkey')

@section('content')

{{-- @if($search)
<h2 class="text-white">Buscando Por:{{ $search }}
@else
<h2 class="text-white">Não foi possível encontrar<h2>
@endif --}}

{{-- @if(count($noticia)==0)
    <p>Não há nada disponível</p>
@endif --}}



{{-- <!-- Adição da Nova Notícia Para o usuário -->
<div class="container">
    @foreach ($noticia as $noticias)
        <div class="row">
           <article class="card-post">
               <a href="{{ route('admin.noticias.show', $noticias->id)}}">
                   <div style="float: left; background-color:rgb(0, 255, 34); width: 300px;height: 200px; border: 3px solid black;">
                   </div>
                   <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                       {{$noticias->titulo}}
                   </h3>
               </a>
           </article>
       </div> --}}

    <!-- Começo das notícias -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de notícias -->
            <div class="col-sm-5 mx-auto">
                 <!-- Notícias em si -->        
                     @foreach ($noticia as $noticias)
                    <a class="image" href="{{ route('admin.noticias.show', $noticias->id)}}">
                        <img class="card-img-top" src="/img/noticias/{{ $noticias->image}}">
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="{{ route('admin.noticias.show', $noticias->id)}}">
                            <h6 class="card-subtitle mt-2 text-info">{{$noticias->titulo}}</h6>
                
                            <h4 class="card-title text-white">{{$noticias->sbtitulo}}
                            </h4>
                        </a>
                    </div>
                    @endforeach 

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
                {{-- @foreach ($review as $reviews)
                <a class="image" href="{{ route('reviews.show', $reviews->id)}}">
                    <img class="card-img-top" src="/img/reviews/{{ $reviews->image}}">
                </a>
                <div class="card-body bg-primary">
                    <a class="card-link"
                        href="{{ route('reviews.show', $reviews->id)}}">
                        <h6 class="card-subtitle mt-2 text-info">{{$reviews->titulo}}</h6>
            
                        <h4 class="card-title text-white">{{$reviews->sbtitulo}}
                        </h4>
                    </a>
                </div>
                @endforeach --}}

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


@endsection
