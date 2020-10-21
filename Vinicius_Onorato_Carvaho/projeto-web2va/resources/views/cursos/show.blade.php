<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-white">Curso: {{$curso->curso}}</div>
                        <div class="card-body">
                            <p>Instrutor: {{$curso->name}}</p>
                            <p>Detalhes: {{$curso->detalhes}}</p>
                            <p>Carga Horária: {{$curso->ch}}h</p>
                        </div>
                    <div class="card-header bg-info text-white">Tópico 1: {{$curso->tp1nome}}</div>
                    <div class="card-body">
                        <p>Conteúdo: <br> {{$curso->tp1conteudo}}</p>
                        <br>
                        <a href="{{$curso->tp1link}}" class="far fa-play-circle">&nbspVideos do Curso: {{$curso->tp1link}}</a>
                    </div>
                    <div class="card-header bg-info text-white ">Tópico 2: {{$curso->tp2nome}}</div>
                    <div class="card-body">
                        <p>Conteúdo: <br> {{$curso->tp2conteudo}}</p>
                        <br>
                        <a href="{{$curso->tp2link}}" class="far fa-play-circle">&nbspVideos do Curso: {{$curso->tp2link}}</a>
                    </div><div class="card-header bg-info text-white ">Tópico 3: {{$curso->tp3nome}}</div>
                    <div class="card-body">
                        <p>Conteúdo: <br> {{$curso->tp3conteudo}}</p>
                        <br>
                        <a href="{{$curso->tp3link}}" class="far fa-play-circle">&nbspVideos do Curso: {{$curso->tp3link}}</a>
                    </div><div class="card-header bg-info text-white ">Tópico 4: {{$curso->tp4nome}}</div>
                    <div class="card-body">
                        <p>Conteúdo: <br> {{$curso->tp4conteudo}}</p>
                        <br>
                        <a href="{{$curso->tp4link}}" class="far fa-play-circle">&nbspVideos do Curso: {{$curso->tp4link}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
