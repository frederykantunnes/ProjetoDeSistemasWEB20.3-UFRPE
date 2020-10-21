<x-app-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedido') }}
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
                    <tr><td>Nome: {{$dado['nome']}}</td></tr>
                    <tr><td>Sobrenome: {{$dado['sobrenome']}}</td></tr>
                    <tr><td>Cpf: {{$dado['cpf']}}</td></tr>
                    <tr><td>Telefone: {{$dado['telefone']}}</td></tr>
                    <tr><td>Cidade: {{$dado['cidade']}}</td></tr>
                    <tr><td>Bairro: {{$dado['bairro']}}</td></tr>
                    <tr><td>Rua: {{$dado['rua']}}</td></tr>
                    <tr><td>Nº: {{$dado['numero']}}</td></tr>
                    <tr><td>Status: {{$dado['status']}}</td></tr>

                    <table class="table table-bordered ">
                        <thead  class="bg-red-600 text-light">
                        <tr>
                            <td>Nome</td>
                            <td>Quantidade</td>
                            <td>Preço</td>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-100">

                            @foreach($dado['itens'] as $item)
                                <tr>
                                    <td>{{$item->nome_c}}</td>
                                    <td>x{{$item->quant}}</td>
                                    <td>{{$item->preco_c}}</td>

                                </tr>
                            @endforeach
                            <tr>
                                <td class="bg-red-600 text-light h3">Total:</td>
                                <td class="bg-red-600 text-light h3"></td>
                                <td class="bg-red-600 text-light h3">R$ {{$dado['total']}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <tr>

                        <td><a href="{{route('pedido.index')}}" class="btn btn-danger mt-1 ml-3 mb-1">Voltar</a>
                        </td>
                    </tr>
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>

