<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="mg-3">
                            @include('flash::message')
                        </div>
                        <span class="float-left">Cursos</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <td>Curso</td>
                                    <td>Instrutor</td>
                                    <td>Detalhes</td>
                                    <td>CH</td>
                                    <td>Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dados as $dado)
                                    <tr>
                                        <td>{{$dado->curso}}</td>
                                        <td>{{$dado->name}}</td>
                                        <td>{{$dado->detalhes}}</td>
                                        <td><a class="btn btn-dark ml-3">{{$dado->ch}}h</a></td>
                                        <td>
                                            <div class="row">
                                                <div>
                                                    <a href="{{route('cursos.show', $dado->id)}}" class="btn btn-success ml-3">Acessar</a>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
