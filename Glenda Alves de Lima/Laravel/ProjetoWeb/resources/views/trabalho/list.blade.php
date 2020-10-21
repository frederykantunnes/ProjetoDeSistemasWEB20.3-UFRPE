@extends('layouts.app')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@section('content')

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <td>Titulo</td>
                                <td>Autor</td>
                                <td>Data de Criação</td>
                                <td>Area</td>
                                <td>Compartilhado por</td>
                                <td>Documento</td>
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
                                    <td><a class="c" href="/download/{{$dado->documento}}"> <i class="bx bxs-down-arrow-square bx-md bx-tada-hover vertical"></i></a></td>
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
