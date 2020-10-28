<head>
    <link rel="stylesheet" href="/css/disciplines.list.css">
    <title>Disciplines</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Disciplines') }}
        </h2>
        
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto px-6">
            <div class="px-6 bg-white overflow-hidden shadow-xl rounded-lg min-h-screen">
                        @if (sizeof($dados) == 0)
                            <p class="flex text-xl items-center justify-center min-h-screen">Nenhum professor encontrado.</p>
                        @else
                            @foreach($dados as $dado)

                            @php $user = App\Models\User::findOrFail($dado->user_id) @endphp
                            <div class="div-article">
                                <div class="py-6 mt-3">
                                    <article class="mt-3 border border-dark overflow-hidden shadow-sm rounded-lg">
                                        <div class="div-header">
                                            <header class="px-6 py-6 flex items-center px-2 py-3">
                                                <img 

                                                    src="/storage/{{$user->getProfilePhoto() }}" 
                                                    alt="{{$user->name }}" class="rounded-full object-cover">
                                                <div class="ml-4">
                                                    <strong>{{$user->name }}</strong>
                                                    <p class="h2">{{App\Utils\Utils::convertTimeFormat($dado->time_from)}} - {{App\Utils\Utils::convertTimeFormat($dado->time_to)}}</p>
                                                    <p class="h4">{{$dado->weekday}}</p>
                                                    <span>{{$dado->subject}}</span>
                                                </div>
                                            </header>
                                        </div>
                                        <div class="div-bio">
                                            <div class="flex items-center px-6 py-6 border-t break-all">
                                                <p>{{$user->biography }}</p>
                                            </div>
                                        </div>
                                        <div class="div-footer">
                                            <footer class="px-6 py-6 flex items-center justify-between border-t">
                                                <p>Preço/hora <strong>R$ {{$dado->cost}}</strong>
                                                </p>
                                                <a href="https://api.whatsapp.com/send?l=pt_BR&phone=55{{$user->whatsapp}}&text=Tenho interesse na sua aula de {{$dado->subject}}, {{$user->name}}"  class="button flex border-0 border-rounded rounded-lg items-center justify-center text-white cursor-pointer" target="_blank">
                                                    <img class="mr-3" src="/storage/icons/whatsapp.svg" alt="Whatsapp">Entrar em contato
                                                </a>
                                            </footer>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            @endforeach

                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
