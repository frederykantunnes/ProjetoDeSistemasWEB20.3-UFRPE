<x-app-layout><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="table table-borderless">
                    <thead class="bg-red-600 text-light">
                    <tr>
                        <td>Dados</td>

                    </tr>
                    </thead>
                    <tbody class="bg-gray-100">

                    <form action="/buscarcpfpedido" method="post">
                            @csrf
                        <input type="hidden" name="_method" value="POST">
                        <tr><td><input class="form-input" type="text" name="cpf"  placeholder="Digite o cpf do usuário:">
                                <button type="submit" class="btn btn-primary text-light ml-1">Buscar</button>

                            </td></tr>
                    </form>


                        <tr>
                            <td>
                                <input class="form-input bg-gray-200" type="text" name="nome" id="" value="<?php if (isset($dado)){ echo $dado->nome;}else{ echo '';}?>" placeholder="Nome:" disabled>
                                <input class="form-input ml-2  bg-gray-200"  type="text" name="sobrenome" id="" value="<?php if (isset($dado)){ echo $dado->sobrenome;}else{ echo '';}?>" placeholder="Sobrenome:" disabled>
                                <input class="form-input ml-2  bg-gray-200"  type="text" name="telefone" id="" value="<?php if (isset($dado)){ echo $dado->telefone;}else{ echo '';}?>" placeholder="Telefone:" disabled>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <input class="form-input bg-gray-200" type="text" name="cidade" id="" value="<?php if (isset($dado)){ echo $dado->cidade;}else{ echo '';}?>" placeholder="Cidade:" disabled>
                                <input class="form-input ml-2 bg-gray-200"  type="text" name="bairro" id="" value="<?php if (isset($dado)){ echo $dado->bairro;}else{ echo '';}?>" placeholder="Bairro:" disabled>
                                <input class="form-input ml-2 bg-gray-200"  type="text" name="rua" id="" value="<?php if (isset($dado)){ echo $dado->rua;}else{ echo '';}?>" placeholder="Rua:" disabled>
                                <input class="form-input ml-2 bg-gray-200"  type="text" name="numero" id="" value="<?php if (isset($dado)){ echo $dado->numero;}else{ echo '';}?>" placeholder="Nº:" disabled>

                            </td>
                        </tr>

                        <table class="table table-borderless">
                            <thead  class="bg-red-600 text-light">
                                <tr>
                                    <td>Id</td>
                                    <td>Nome</td>
                                    <td>Quantidade</td>
                                    <td>Preço</td>
                                    <td>Ação</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($pedido))
                                    @foreach($pedido as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nome}}</td>
                                            <td>x{{$item->quant}}</td>
                                            <td>{{$item->preco}}</td>
                                            <td>
                                                <form action="/excluirItem" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="id_usuario" value="{{$dado->id}}">
                                                    <input type="hidden" name="id_pedido" value="<?php if(isset($id_pedido)){echo $id_pedido;}else{echo '';}?>">
                                                    <button type="submit" class="btn btn-danger text-light">Excluir</button>
                                                </form></td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>
                                    <td class="bg-red-600 text-light h3">Total:</td>
                                    <td class="bg-red-600 text-light"></td>
                                    <td class="bg-red-600 text-light"></td>
                                    <td class="bg-red-600 text-light h3">R$ <?php if(isset($total)){echo $total;}else{ echo '0';}?></td>
                                    <td class="bg-red-600 text-light"></td>
                                </tr>
                            </tbody>
                        </table>
                        <tr>
                            <td>
                                <form action="/adicionarpedido" method="post">
                                    @csrf
                                    <select class="form-select mb-2 ml-2" name="id_cardapio" id="">
                                        @foreach($cardapio as $item)
                                            <option value="{{$item->id}}">Id: {{$item->id}}, nome: {{$item->nome}}, preço: {{$item->preco}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="id_usuario" value="<?php if(isset($dado)){echo $dado->id;}else{ echo '';}?>">

                                    <button type="submit" class="btn btn-success">Adicionar</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="row ml-4">
                                    <form action="/finalizar" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="id_pedido" value="<?php if(isset($id_pedido)){echo $id_pedido;}else{echo '';}?>">
                                        <input type="hidden" name="id_usuario" value="<?php if (isset($dado)){ echo $dado->id;}else{ echo '';}?>">
                                        <button type="submit" class="btn btn-success text-light mr-2">Finalizar</button>
                                    </form>

                                    <a href="{{route('pedido.index')}}" class="btn btn-danger text-light">Voltar</a>
                                </div>

                            </td>
                        </tr>



                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>

