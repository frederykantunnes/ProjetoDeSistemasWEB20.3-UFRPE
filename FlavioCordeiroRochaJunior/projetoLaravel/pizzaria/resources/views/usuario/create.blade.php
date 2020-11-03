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
                        <td>Cadastro</td>

                    </tr>
                    </thead>
                    <tbody class="bg-gray-100">


                    <form action="{{route('usuario.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="POST">
                        <tr><td><input class="form-control" type="text" name="nome" required  placeholder="Nome:"></td></tr>
                        <tr><td><input class="form-control" type="text" name="sobrenome" required  id="" placeholder="Sobrenome:"></td></tr><tr><td><input class="form-control" type="text" name="cpf"  id="" placeholder="Cpf:"></td></tr>
                        <tr><td><input class="form-control" type="text" name="telefone" required id=""  placeholder="Telefone:"></td></tr>
                        <tr><td><input class="form-control" type="text" name="cidade" required id=""  placeholder="Cidade"></td></tr>
                        <tr><td><input class="form-control" type="text" name="bairro" required  id="" placeholder="Bairro:"> </td></tr>
                        <tr><td><input class="form-control" type="text" name="rua"  required id="" placeholder="Rua:"></td></tr>
                        <tr><td><input class="form-control" type="text" name="numero" required id="" placeholder="Nº:"></td></tr>
                        <tr><td><select class="form-control" name="status" id="">
                                    <option value="Ativo" selected>Ativo</option>
                                    <option value="Desativado"  >Desativado</option>
                                </select></td></tr>
                        <tr>
                            <td><button type="submit" class="btn btn-success text-light">Finalizar</button>
                                <a href="{{route('usuario.index')}}" class="btn btn-danger text-light">Voltar</a>
                            </td>
                        </tr>
                    </form>


                    </tbody>

                </table>
                @include('flash::message')

            </div>
        </div>
    </div>
</x-app-layout>

