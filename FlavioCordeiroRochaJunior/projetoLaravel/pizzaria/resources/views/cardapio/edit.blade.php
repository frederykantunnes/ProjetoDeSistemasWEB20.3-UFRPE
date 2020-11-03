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
                    <form  action="{{route('cardapio.update',$dado->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                    <tr><td><input class="form-control" type="text" name="nome" id="" required placeholder="Nome:" value="{{$dado->nome}}"></td></tr>
                    <tr><td><input class="form-control" type="text" name="preco" id="" required placeholder="Preço:" value="{{$dado->preco}}"></td></tr>
                    <tr><td><input class="form-control" type="text" name="ingredientes" id="" required placeholder="Ingredientes:" value="{{$dado->ingredientes}}"></td></tr>
                        <tr>
                        <td><select class="form-control form-control" name="tipo" id="">
                                <option value="pizza" <?php if($dado->tipo=="pizza"){ echo 'selected';}else{echo '';}?>>Pizza</option>
                                <option value="hamburguer" <?php if($dado->tipo=="hamburguer"){ echo 'selected';}else{echo '';}?> >Hamburguer</option>
                                <option value="pocao" <?php if($dado->tipo=="pocao"){ echo 'selected';}else{echo '';}?> >Poção</option>
                                <option value="bebida" <?php if($dado->tipo=="bebida"){ echo 'selected';}else{echo '';}?> >Bebida</option>
                            </select>
                        </td>
                        <tr>
                        <td><select class="form-control form-control" name="status" id="">
                            <option value="Ativo" <?php if($dado->status=="Ativo"){ echo 'selected';}else{echo '';}?>>Ativo</option>
                                <option value="Desativado" <?php if($dado->status=="Desativado"){ echo 'selected';}else{echo '';}?> >Desativado</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row m-3">

                                    <button type="submit" class="btn btn-success text-light"> Salvar </button>


                                <a href="{{route('cardapio.index')}}" class="btn btn-danger text-light ml-3"> Cancelar </a>
                            </div>

                        </td>

                    </tr>
                    </form>
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>

