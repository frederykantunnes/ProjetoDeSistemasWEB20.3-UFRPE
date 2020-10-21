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


                    <form action="{{route('usuario.update',$dado->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                    <tr><td><input class="form-control" type="text" name="nome" value="{{$dado->nome}}" placeholder="Nome:" required></td></tr>
                    <tr><td><input class="form-control" type="text" name="sobrenome" value="{{$dado->sobrenome}}" id="" placeholder="Sobrenome:" required></td></tr><tr><td><input class="form-control" type="text" name="cpf" value="{{$dado->cpf}}" id="" placeholder="Cpf:"></td></tr>
                    <tr><td><input class="form-control" type="text" name="telefone" id="" value="{{$dado->telefone}}" placeholder="Telefone:" required></td></tr>
                    <tr><td><input class="form-control" type="text" name="cidade" id="" value="{{$dado->cidade}}" placeholder="Cidade" required></td></tr>
                    <tr><td><input class="form-control" type="text" name="bairro" value="{{$dado->bairro}}" id="" placeholder="Bairro:" required> </td></tr>
                    <tr><td><input class="form-control" type="text" name="rua" value="{{$dado->rua}}" id="" placeholder="Rua:" required></td></tr>
                    <tr><td><input class="form-control" type="text" name="numero" value="{{$dado->numero}}" id="" placeholder="Nº:" required></td></tr>
                    <tr><td><select class="form-control" name="status" id="">
                                <option value="Ativo" <?php if($dado->status == "Ativo"){echo 'selected';}else{echo '';}?>>Ativo</option>
                                <option value="Desativado"  <?php if($dado->status == "Desativado"){echo 'selected';}else{echo '';}?>>Desativado</option>
                            </select></td></tr>
                    <tr>
                        <td><button type="submit" class="btn btn-success text-light">Salvar</button>
                            <a href="{{route('usuario.index')}}" class="btn btn-danger text-light">Voltar</a>
                        </td>
                    </tr>
                    </form>


                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>
