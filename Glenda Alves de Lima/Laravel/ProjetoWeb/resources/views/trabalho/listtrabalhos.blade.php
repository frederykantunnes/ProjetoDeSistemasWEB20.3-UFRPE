@extends('layouts.app')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

@section('content')
<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered " style="width:100%" >
                        <thead>
                            <tr>
                                <td>Titulo</td>
                                <td>Autor</td>
                                <td>Data de Criação</td>
                                <td>Area</td>
                                <td>Compartilhado por</td>
                                <td>Download</td>
                                <td>Editar</td>
                                <td>Excluir</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>{{$dado->titulo}}</td>
                                    <td>{{$dado->autor}}</td>
                                    <td>{{\Carbon\Carbon::parse($dado->ano)->format("d/m/Y")}}</td>
                                    <td>{{$dado->area}}</td>
                                    <td>{{\App\Models\Trabalho::find($dado->id)->user->name}}</td>
                                    <td><a class="c" href="/download/{{$dado->documento}}"> <i class="bx bxs-down-arrow-square bx-md bx-tada-hover "></i></a></td>
                                    <td>
                                            <div class="col-4">
                                                <a class="c" href="{{route('trabalhos.edit', $dado->id )}}"><i class="bx bxs-edit bx-md bx-tada-hover "></i></a>
                                            </div>

                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4">
                                                <form action="{{route('trabalhos.destroy', $dado->id )}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="c" type="submit"><a><i class="bx bxs-trash bx-md bx-tada-hover"></i></a></button>
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
@endsection
