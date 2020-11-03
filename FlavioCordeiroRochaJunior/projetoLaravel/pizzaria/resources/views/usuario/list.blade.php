<x-app-layout><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuário') }}
        </h2>
        <form action="/buscarcpf" method="get">

            <input type="text" name="cpf" id="" class="form-control" placeholder="Buscar pelo cfp:(sem pontos e traços)">
            <button type="submit" class="btn btn-primary mt-2">Buscar</button>
        </form>
        <a href="{{route('usuario.create')}}" class="btn btn-success mt-1">Cadastrar</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <table class="table table-borderless">
                        <thead class="bg-red-600 text-light">
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>Sobrenome</td>
                                <td>Cpf</td>
                                <td>Telefone</td>
                                <td>Cidade</td>
                                <td>Bairro</td>
                                <td>Rua</td>
                                <td>Número</td>
                                <td>Status</td>
                                <td>Ações</td>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-100">
                        @foreach($dados as $dado)
                            <tr>
                                <td>{{$dado->id}}</td>
                                <td>{{$dado->nome}}</td>
                                <td>{{$dado->sobrenome}}</td>
                                <td>{{$dado->cpf}}</td>
                                <td>{{$dado->telefone}}</td>
                                <td>{{$dado->cidade}}</td>
                                <td>{{$dado->bairro}}</td>
                                <td>{{$dado->rua}}</td>
                                <td>{{$dado->numero}}</td>
                                <td>{{$dado->status}}</td>
                                <td>
                                    <div>
                                        <a href="{{route('usuario.show',$dado->id)}}" class="btn btn-info">Ver</a>
                                        <a href="{{route('usuario.edit',$dado->id)}}" class="btn btn-warning">Editar</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


            </div>
        </div>
    </div>
</x-app-layout>
