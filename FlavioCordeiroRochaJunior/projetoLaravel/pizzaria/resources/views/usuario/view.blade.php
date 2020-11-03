<x-app-layout><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="table table-borderless">
                    <thead class="bg-red-600 text-light">
                    <tr>
                        <td>Informações</td>

                    </tr>
                    </thead>
                    <tbody class="bg-gray-100">



                    <tr><td>Nome: {{$dado->nome}}</td></tr>
                    <tr><td>Sobrenome: {{$dado->sobrenome}}</td></tr>
                    <tr><td>Cpf: {{$dado->cpf}}</td></tr>
                    <tr><td>Telefone: {{$dado->telefone}}</td></tr>
                    <tr><td>Cidade: {{$dado->cidade}}</td></tr>
                    <tr><td>Bairro: {{$dado->bairro}}</td></tr>
                    <tr><td>Rua: {{$dado->rua}}</td></tr>
                    <tr><td>Nº: {{$dado->numero}}</td></tr>
                    <tr><td>Status: {{$dado->status}}</td></tr>
                    <tr><td>

                                <a href="{{route('usuario.edit',$dado->id)}}" class="btn btn-warning text-light">Editar</a>
                    <a href="{{route('usuario.index')}}" class="btn btn-danger text-light">Voltar</a></td></tr>



                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>
