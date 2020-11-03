@extends('layouts.app')

@section('title', 'Criar enquete')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">Criar nova enquete</div>
                <div class="card-body">
                    <form action="{{route('polls.store')}}" method="POST">
                        @csrf
                        <input class="form-control mb-3" type="text" name="question" required placeholder="Pergunta">
                        <input class="form-control mb-3" type="text" name="option-1" required placeholder="Opção 1 (Obrigatório)">
                        <input class="form-control mb-3" type="text" name="option-2" required placeholder="Opção 2 (Obrigatório)">
                        <input class="form-control mb-3" type="text" name="option-3" placeholder="Opção 3 (Opcional)">
                        <input class="form-control mb-3" type="text" name="option-4" placeholder="Opção 4 (Opcional)">
                        <input class="form-control mb-3" type="text" name="option-5" placeholder="Opção 5 (Opcional)">

                        <select class="form-control mb-3" name="category">
                            <option>Escolha um categoria</option>
                            <option value="1">Política</option>
                            <option value="2">Entretenimento</option>
                            <option value="3">Ciência</option>
                            <option value="4">Tecnologia</option>
                            <option value="5">Esportes</option>
                        </select>
                        <button class="btn btn-success">Criar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
