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
                    <div class="card-header bg-success text-white">Editar Cursos</div>
                        <div class="card-body">
                            <form action="{{route('cursos.update',$curso->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input class="form-control mb-3" type="text" name="name" required placeholder="Instrutor" value="{{$curso->name}}">
                                <input class="form-control mb-3" type="text" name="curso" required placeholder="Curso" value="{{$curso->curso}}">
                                <input class="form-control mb-3" type="text" name="detalhes" required placeholder="Resumo" value="{{$curso->detalhes}}">
                                <input class="form-control mb-3" type="number" name="ch" required placeholder="Carga Horária" value="{{$curso->ch}}">

                                <div class="card-header mb-3 bg-success text-white">Cadastro do Tópico 1</div>

                                <input class="form-control mb-3" type="text" name="tp1nome" required placeholder="Nome do Tópico 1" value="{{$curso->tp1nome}}">
{{--                                <input class="form-control mb-3" type="text" name="tp1conteudo" required placeholder="Conteudo do Tópico 1" value="{{$curso->tp1conteudo}}">--}}
                                <textarea class="form-control mb-3" name="tp1conteudo" type="text" required placeholder="Conteudo do Tópico 1" rows="7" maxlength="2000">{{$curso->tp1conteudo}}</textarea>
                                <input class="form-control mb-3" type="text" name="tp1link" required placeholder="links do Tópico 1" value="{{$curso->tp1link}}">

                                <div class="card-header mb-3 bg-success text-white">Cadastro do Tópico 2</div>

                                <input class="form-control mb-3" type="text" name="tp2nome" required placeholder="Nome do Tópico 2" value="{{$curso->tp2nome}}">
                                <textarea class="form-control mb-3" name="tp2conteudo" type="text" required placeholder="Conteudo do Tópico 2" rows="7" maxlength="2000" >{{$curso->tp2conteudo}}</textarea>
                                <input class="form-control mb-3" type="text" name="tp2link" required placeholder="Link do Tópico 2" value="{{$curso->tp2link}}">

                                <div class="card-header mb-3 bg-success text-white">Cadastro do Tópico 3</div>

                                <input class="form-control mb-3" type="text" name="tp3nome" required placeholder="Nome do Tópico 3" value="{{$curso->tp3nome}}">
                                <textarea class="form-control mb-3" name="tp3conteudo" type="text" required placeholder="Conteudo do Tópico 3" rows="7" maxlength="2000">{{$curso->tp3conteudo}}</textarea>
                                <input class="form-control mb-3" type="text" name="tp3link" required placeholder="Link do Tópico 3" value="{{$curso->tp3link}}">

                                <div class="card-header mb-3 bg-success text-white">Cadastro do Tópico 4</div>

                                <input class="form-control mb-3" type="text" name="tp4nome" required placeholder="Nome do Tópico 4" value="{{$curso->tp4nome}}">
                                <textarea class="form-control mb-3" name="tp4conteudo" type="text" required placeholder="Conteudo do Tópico 4" rows="7" maxlength="2000" >{{$curso->tp4conteudo}}</textarea>
                                <input class="form-control mb-3" type="text" name="tp4link" required placeholder="Link do Tópico 4" value="{{$curso->tp4link}}">
                                <button class="btn btn-success mb-1">Editar</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
