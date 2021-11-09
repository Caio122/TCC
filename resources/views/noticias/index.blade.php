@extends('layouts.app')

@section('title', 'Notícias')

@section('content')


<!-- Parte De Notícias -->
<h1 class="title text-info ml-4"> Últimas Notícias </h1>


<!-- Adição da Nova Notícia Para o usuário -->
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
       </div>
        <tr>
                <th scope="row">{{ $noticias->id }}</th>
                <td> {{ $noticias->titulo }}</td>
                {{-- <img src="/img/noticias/{{ $noticia->image}}"> --}}
                <td>
                    <a class ="title text-info" href="{{ route('admin.noticias.show', $noticias->id) }}">Detalhes</a>
                    <a class ="title text-info" href="{{ route('admin.noticias.edit', $noticias->id) }}">Alterar</a>
                    <a class ="title text-info" href="{{ route('admin.noticias.delete', $noticias->id) }}">Deletar</a>
                </td>
            </tr>

        @endforeach

        <!-- Aqui Começa a Lista Das Notícias-->
         <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;" >
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>


        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;" >
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>
</div>

@endsection
