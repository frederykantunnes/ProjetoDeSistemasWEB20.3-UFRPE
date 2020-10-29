<head>
    <link rel="stylesheet" href="/css/disciplines.me.css">
    <title>My Disciplines</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Disciplines') }}
        </h2>
        
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto px-6">
            <div class="px-6 bg-white overflow-hidden shadow-xl rounded-lg min-h-screen">
                        @if (sizeof($dados) == 0)
                            <p class="flex text-xl items-center justify-center min-h-screen">Você não tem nenhuma disciplina.</p>
                        @else
                            @foreach($dados as $dado)

                            @php $user = App\Models\User::findOrFail($dado->user_id) @endphp
                            <div class="div-article">
                                <div class="py-6 mt-3">
                                    <article class="mt-3 border border-dark overflow-hidden shadow-sm rounded-lg">
                                        <div class="div-header">
                                            <header class="px-6 py-6 flex items-center px-2 py-3">
                                                <img 

                                                    src="../../../../storage/{{$user->getProfilePhoto() }}" 
                                                    alt="{{$user->name }}" class="rounded-full object-cover">
                                                <div class="ml-4">
                                                    <strong>{{$user->name }}</strong>
                                                    <p class="h2">{{App\Http\Middleware\ConvertTime::convertTimeFormat($dado->time_from)}} - {{App\Http\Middleware\ConvertTime::convertTimeFormat($dado->time_to)}}</p>
                                                    <p class="h4">{{$dado->weekday}}</p>
                                                    <span>{{$dado->subject}}</span>
                                                </div>
                                            </header>
                                        </div>
                                        <div class="div-bio">
                                            <div class="flex items-center px-6 py-3 border-t break-all">
                                                <p>{{$user->biography }}</p>
                                            </div>
                                        </div>
                                        <div class="div-footer">
                                            <footer class="px-6 py-6 flex items-center justify-between border-t">
                                                <p>Preço/hora <strong>R$ {{$dado->cost}}</strong></p>

                                                <div class="div-buttons">
                                                    <div class="flex items-center justify-between">
                                                        <a href="{{ route('disciplines.edit', $dado->id) }}">
                                                            <img src="/storage/icons/update.svg" alt="update">
                                                        </a>

                                                        <form action="{{ route('disciplines.destroy', $dado->id) }}" class="delete-discipline" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit">
                                                                <img src="/storage/icons/delete.svg" alt="delete" >
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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
