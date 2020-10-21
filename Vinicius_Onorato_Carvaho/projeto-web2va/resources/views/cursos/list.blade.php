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
                        <a href="{{route('cursos.create')}}" class="btn btn-primary float-right">Novo Curso</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <td>Id</td>
                                    <td>Curso</td>
                                    <td>Detalhes</td>
                                    <td>CH</td>
                                    <td>Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dados as $dado)
                                    <tr>
                                        <td>{{$dado->id}}</td>
                                        <td>{{$dado->curso}}</td>
                                        <td>{{$dado->detalhes}}</td>
                                        <td> <div class="row">
                                                <div class="col-4">
                                                    <a class="btn btn-dark">{{$dado->ch}}h</a>
                                                </div>
                                            </div></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{route('cursos.show', $dado->id)}}" class="btn btn-success">Exibir</a>
                                                    </div>
                                                <div class="col-4">
                                                    <a href="{{route('cursos.edit', $dado->id)}}" class="btn btn-warning">Editar</a>
                                                </div>
                                                <div class="col-4">
                                                    <form action="{{route('cursos.destroy', $dado->id)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger"> Excluir</button>

                                                    </form>
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
