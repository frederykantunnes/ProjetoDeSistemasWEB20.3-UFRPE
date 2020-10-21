@extends('layouts.app')

@section('title', 'Categorias')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="text-center">
                    <a class="d-block" href="{{route('category.show', 1)}}">
                    <i class="d-block fa fa-bullhorn fa-5x"></i>Política</a>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <a class="d-block" href="{{route('category.show', 2)}}">
                    <i class="d-block fa fa-film fa-5x"></i>Entretenimento</a>
                </div>
            </div>

            <div class="col-4">
                <div class="text-center">
                    <a class="d-block" href="{{route('category.show', 3)}}">
                    <i class="d-block fa fa-flask fa-5x"></i>Ciência</a>
                </div>
            </div>

            <div class="col-4">
                <div class="text-center">
                    <a class="d-block" href="{{route('category.show', 4)}}">
                    <i class="d-block fa fa-laptop fa-5x"></i>Tecnologia</a>
                </div>
            </div>

            <div class="col-4">
                <div class="text-center">
                    <a class="d-block" href="{{route('category.show', 5)}}">
                    <i class="d-block fa fa-bicycle fa-5x"></i>Esportes</a>
                </div>
            </div>
            
        </div>
    </div>
@endsection