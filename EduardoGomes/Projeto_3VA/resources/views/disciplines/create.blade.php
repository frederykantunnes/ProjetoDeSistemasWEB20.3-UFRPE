<head>
    <link rel="stylesheet" href="/css/disciplines.form.css">
    <title>Be a Teacher</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Be a Teacher') }}
        </h2>
    </x-slot>

        <div class="py-12 max-w-7xl mx-auto px-6">
            <div class="px-6 bg-white overflow-hidden shadow-xl rounded-lg min-h-screen">
                <div class="div-main">
                        <div class="div-form">
                            <form action="{{route('disciplines.store')}}" method="POST"> 
                                @csrf
                                
                                <fieldset class="border-0 py-3 px-4 mb-4">
                                    <legend class="flex items-center justify-between pb-3 border-b mb-4">Sobre a aula</legend>
                                    <div class="select-block">
                                        <label for="subject">Matéria</label>
                                        <select name="subject" id="subject" class="mt-2 rounded-lg border px-4 mb-4" required>
                                                
                                            <option value="">Selecione uma opçao</option>
                                                @for($i=0; $i < sizeof($subjects); $i++)
                                                    <option value={{$subjects[$i]}}>{{$subjects[$i]}}</option>
                                                @endfor

                                        </select>
                                    </div>
                                    <div class="input-block">
                                        <label for="cost">Custo da sua hora/aula<small> (R$)</small></label>
                                        <input id="cost" name="cost" type="number" class="mt-2 rounded-lg border px-4 mb-4" required>
                                    </div>
                                </fieldset>

                                <fieldset id="schedule-items" class="border-0 py-3 px-4 mb-4">
                                    <legend class="flex items-center justify-between pb-3 border-b mb-4">Horário disponível</legend>

                                    <div class="schedule-item">
                                        <div class="select-block">
                                            <label for="weekday">Dia da semana</label>
                                            <select name="weekday" class="mt-2 rounded-lg border px-4 mb-4" required>

                                                <option value="">Selecione uma opçao</option>
                                                    @for($i=0; $i < sizeof($weekdays); $i++)
                                                        <option value={{$weekdays[$i]}}>{{$weekdays[$i]}}</option>
                                                    @endfor

                                            </select>
                                        </div>
                                        <div class="input-block">
                                            <label for="time_from">Das</label>
                                            <input name="time_from" type="time" class="mt-2 rounded-lg border px-4 mb-4" required>
                                        </div>

                                        <div class="input-block">
                                            <label for="time_to">Até</label>
                                            <input name="time_to" type="time" class="mt-2 rounded-lg border px-4 mb-4" required>
                                        </div>
                                    </div>

                                    <div class="div-footer">
                                        <footer class="py-6 px-4 border-t">
                                            <p class="flex items-center justify-center">
                                                Importante! <br> Preencha todos os dados
                                            </p>
                                            <button type="submit" class="flex items-center justify-center decoration-0 border-0 rounded-lg cursor-pointer outline-0 mt-4 text-white mx-auto">Salvar cadastro</button>
                                        </footer>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</x-app-layout>
