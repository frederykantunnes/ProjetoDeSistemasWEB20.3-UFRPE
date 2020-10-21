<x-app-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedido') }}
        </h2>
        <a href="{{route('pedido.create')}}" class="btn btn-success">Cadastrar</a>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="table table-bordered ">
                    <thead class="bg-red-600 text-light">
                    <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>Ações</td>

                    </tr>
                    </thead>
                    <tbody class="bg-gray-100">
                    @foreach($dados as $dado)
                        <tr>
                            <td>{{$dado->id}}</td>
                            <td>{{$dado->nome}}</td>
                            <td>{{$dado->total}}</td>
                            <td>{{$dado->status}}</td>

                            <td>

                                <div class="row">
                                    <div class="m-2"><a href="{{route('pedido.show',$dado->id)}}" class="btn btn-info">Ver</a></div>
                                    @if($dado->status!="Entregue" and $dado->status!="Cancelado")
                                    <div class="m-2"> <a href="{{route('pedido.edit',$dado->id)}}" class="btn btn-warning">Editar</a></div>  <div class="m-2">
                                            @endif
                                        <form action="/entregar" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="id_pedido" value="{{$dado->id}}">
                                            <button type="submit" class="btn btn-success <?php if($dado->status=="Entregue" or $dado->status == "Cancelado"){ echo 'mt-2';}?>">Entregar</button>
                                        </form> </div>




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
