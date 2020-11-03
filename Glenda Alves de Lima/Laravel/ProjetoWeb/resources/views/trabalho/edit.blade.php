@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{route('trabalhos.update', $trabalho->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Titulo</label>
                <div class="col-9">
                    <input id="text" type="text" name="titulo" placeholder="Titulo"  aria-describedby="textHelpBlock" required="required" class="form-control" value="{{$trabalho->titulo}}">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Autor</label>
                <div class="col-9">
                    <input id="text" type="text" name="autor" placeholder="Autor"  aria-describedby="textHelpBlock" required="required" class="form-control" value="{{$trabalho->autor}}">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label" for="select">Tipo Documento</label>
                <div class="col-9">
                    <select id="select" name="tipoDocumento" class="custom-select" aria-describedby="selectHelpBlock" required="required">
                        <option  {{$trabalho->tipoDocumento == "Redacao" ? 'selected': ''}} value="Redacao">Redacao</option>
                        <option  {{$trabalho->tipoDocumento == "Dissertacao de Mestrado" ? 'selected': ''}} value="Dissertacao de Mestrado">Dissertacao de Mestrado</option>
                        <option  {{$trabalho->tipoDocumento == "TCC" ? 'selected': ''}} value="TCC">TCC</option>
                        <option  {{$trabalho->tipoDocumento == "Artigo" ? 'selected': ''}} value="Artigo">Artigo</option>
                        <option  {{$trabalho->tipoDocumento == "Resumo" ? 'selected': ''}} value="Resumo">Resumo</option>
                        <option  {{$trabalho->tipoDocumento == "Relatorio" ? 'selected': ''}} value="Relatorio">Relatorio</option>
                        <option  {{$trabalho->tipoDocumento == "Plano de Negocio" ? 'selected': ''}} value="Artigo">Plano de Negocio</option>
                        <option  {{$trabalho->tipoDocumento == "Projeto de Pesquisa" ? 'selected': ''}} value="Projeto de Pesquisa">Projeto de Pesquisa</option>
                        <option  {{$trabalho->tipoDocumento == "Estudo de Caso" ? 'selected': ''}} value="Estudo de Caso">Estudo de Caso</option>
                        <option  {{$trabalho->tipoDocumento == "Criticas" ? 'selected': ''}} value="Criticas">Criticas</option>
                        <option  {{$trabalho->tipoDocumento == "Monografia" ? 'selected': ''}} value="Monografia">Monografia</option>
                        <option  {{$trabalho->tipoDocumento == "Tese" ? 'selected': ''}} value="Tese">Tese</option>
                        <option  {{$trabalho->tipoDocumento == "Resenha" ? 'selected': ''}} value="Resenha">Resenha</option>
                        <option  {{$trabalho->tipoDocumento == "Fichamento" ? 'selected': ''}} value="Fichamento">Fichamento</option>
                        <option  {{$trabalho->tipoDocumento == "Outra" ? 'selected': ''}} value="Outra">Outra</option>

                    </select>
                    <span id="selectHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">area</label>
                <div class="col-9">
                    <select id="text" name="area" class="custom-select" aria-describedby="textHelpBlock" required="required">
                        <option  {{$trabalho->tipoDocumento == "Ciências Exatas e Terra" ? 'selected': ''}} value="Ciências Exatas e Terra">Ciências Exatas e Terra</option>
                        <option  {{$trabalho->tipoDocumento == "Ciências Biológicas" ? 'selected': ''}} value="Ciências Biológicas">Ciências Biológicas</option>
                        <option  {{$trabalho->tipoDocumento == "Engenharias" ? 'selected': ''}} value="Engenharias">Engenharias</option>
                        <option  {{$trabalho->tipoDocumento == "Ciências da Saúde" ? 'selected': ''}} value="Ciências da Saúde">Ciências da Saúde</option>
                        <option  {{$trabalho->tipoDocumento == "Ciências Agrárias" ? 'selected': ''}} value="Ciências Agrárias">Ciências Agrárias</option>
                        <option  {{$trabalho->tipoDocumento == "Ciências Sociais" ? 'selected': ''}} value="Ciências Sociais">Ciências Sociais</option>
                        <option  {{$trabalho->tipoDocumento == "Ciências Humanas" ? 'selected': ''}} value="Ciências Humanas">Ciências Humanas</option>
                        <option  {{$trabalho->tipoDocumento == "Linguística,Letras e Artes" ? 'selected': ''}} value="Linguística,Letras e Artes">Linguística,Letras e Artes</option>
                        <option  {{$trabalho->tipoDocumento == "Outra" ? 'selected': ''}} value="Outra">Outra</option>
                    </select>
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Descricao</label>
                <div class="col-9">
                    <textarea maxlength="255" id="text" type="text" name="descricao"  cols="40" rows="5" aria-describedby="textHelpBlock" required="required" class="form-control" >{{$trabalho->descricao}}</textarea>
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Data de Criação</label>
                <div class="col-9">
                    <input id="text" type="date" name="ano" aria-describedby="textHelpBlock" required="required" class="form-control" value="{{$trabalho->ano}}">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
