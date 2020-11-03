<x-app-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cardapio') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="table table-bordered ">
                    <thead class="bg-red-600 text-light">
                    <tr>

                        <td>Informações</td>

                    </tr>
                    </thead>
                    <tbody class="bg-gray-100">
                    <tr><td>Nome: {{$dado->nome}}</td></tr>
                    <tr><td>Preço: {{$dado->preco}}</td></tr>
                    <tr><td>Ingredientes: {{$dado->ingredientes}}</td></tr>
                    <tr><td>Tipo: {{$dado->tipo}}</td></tr>
                    <tr><td>Status: {{$dado->status}}</td></tr>
                    <tr><td><a href="{{route('cardapio.index')}}" class="btn btn-danger">Voltar</a></td></tr>
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>

