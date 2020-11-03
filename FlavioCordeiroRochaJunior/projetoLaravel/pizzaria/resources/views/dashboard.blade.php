<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="{{asset('../asset/principal.jpg')}}" width="110%">
                <div style="position: absolute;top: 300px;left:25%;width: 10%;height: 150px;border-radius: 20px;background-color: tomato">
                    <h2 class="ml-3 mt-2 text-light">Total de usuários:</h2>
                    <h1  style="position:relative;top: 20px;left: 30%;font-size: 65px;font-weight: bold;" class="text-light">{{$total_usuario->total}}</h1>
                </div>

                <div style="position: absolute;top: 300px;left:45%;width: 10%;height: 150px;border-radius: 20px;background-color: tomato" class="bg-gray-200">
                    <h2 class="ml-3 mt-2 text-light"">Total de itens no cardápio:</h2>
                    <h1  style="position:relative;top: 5px;left: 30%;font-size: 65px;font-weight: bold;" class="text-light">{{$total_cardapio->total}}</h1>
                </div>

                <div style="position: absolute;top: 300px;left:65%;width: 10%;height: 150px;border-radius: 20px;background-color: tomato">
                    <h2 class="ml-3 mt-2 text-light"">Total de pedidos:</h2>
                    <h1  style="position:relative;top: 23px;left: 30%;font-size: 65px;font-weight: bold;" class="text-light">{{$total_pedido->total}}</h1>
                </div>

                <div style="position: absolute;top: 550px;left:35%;width: 10%;height: 150px;border-radius: 20px;background-color: tomato">
                    <h2 class="ml-3 mt-2 text-light">Total de pedidos em aberto:</h2>
                    <h1  style="position:relative;top: 10px;left: 30%;font-size: 65px;font-weight: bold;" class="text-light">{{$total_pedido_aberto->total}}</h1>
                </div>

                <div style="position: absolute;top: 550px;left:55%;width: 10%;height: 150px;border-radius: 20px;background-color: tomato">
                    <h2 class="ml-3 mt-2 text-light"">Total de pedidos entregues:</h2>
                    <h1  style="position:relative;top: 10px;left: 30%;font-size: 65px;font-weight: bold;" class="text-light">{{$total_pedido_entregue->total}}</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
