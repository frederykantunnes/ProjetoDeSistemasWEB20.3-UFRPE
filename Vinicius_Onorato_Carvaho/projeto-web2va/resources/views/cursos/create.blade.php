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
                    <div class="card-header bg-danger text-white">Detalhes</div>
                        <div class="card-body">
                            <form action="{{route('cursos.store')}}" method="POST">
                                @csrf
                                <input class="form-control mb-3" type="text" name="name" required placeholder="Instrutor">
                                <input class="form-control mb-3" type="text" name="curso" required placeholder="Curso">
                                <input class="form-control mb-3" type="text" name="detalhes" required placeholder="Resumo" >
                                <input class="form-control mb-3" type="number" name="ch" required placeholder="Carga Horária">
                                <div class="card-header mb-3 bg-danger text-white">Cadastro do Tópico 1</div>

                                <input class="form-control mb-3" type="text" name="tp1nome" required placeholder="Nome do Tópico 1">
                                <textarea class="form-control mb-3" name="tp1conteudo" type="text" required placeholder="Conteudo do Tópico 1" rows="7" maxlength="2000" ></textarea>
                                <input class="form-control mb-3" type="text" name="tp1link" required placeholder="links do Tópico 1">

                                <div class="card-header mb-3 bg-danger text-white">Cadastro do Tópico 2</div>

                                <input class="form-control mb-3" type="text" name="tp2nome" required placeholder="Nome do Tópico 2">
                                <textarea class="form-control mb-3" name="tp2conteudo" type="text" required placeholder="Conteudo do Tópico 2" rows="7" maxlength="2000" ></textarea>
                                <input class="form-control mb-3" type="text" name="tp2link" required placeholder="Link do Tópico 2">

                                <div class="card-header mb-3 bg-danger text-white">Cadastro do Tópico 3</div>

                                <input class="form-control mb-3" type="text" name="tp3nome" required placeholder="Nome do Tópico 3">
                                <textarea class="form-control mb-3" name="tp3conteudo" type="text" required placeholder="Conteudo do Tópico 3" rows="7" maxlength="2000" ></textarea>
                                <input class="form-control mb-3" type="text" name="tp3link" required placeholder="Link do Tópico 3">

                                <div class="card-header mb-3 bg-danger text-white">Cadastro do Tópico 4</div>

                                <input class="form-control mb-3" type="text" name="tp4nome" required placeholder="Nome do Tópico 4">
                                <textarea class="form-control mb-3" name="tp4conteudo" type="text" required placeholder="Conteudo do Tópico 4" rows="7" maxlength="2000" ></textarea>
                                <input class="form-control mb-3" type="text" name="tp4link" required placeholder="Link do Tópico 4">
                                <button class="btn btn-danger mb-1">Cadastrar</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
