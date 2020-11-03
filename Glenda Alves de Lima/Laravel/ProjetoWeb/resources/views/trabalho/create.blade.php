

@extends('layouts.app')

@section('content')
    <div class="container mt-5 font">
        <form action="{{route('trabalhos.store')}}"  enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Titulo</label>
                <div class="col-9">
                    <input id="text" type="text" name="titulo" placeholder="Titulo"  aria-describedby="textHelpBlock" required="required" class="form-control">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Autor</label>
                <div class="col-9">
                    <input id="text" type="text" name="autor" placeholder="Autor"  aria-describedby="textHelpBlock" required="required" class="form-control">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 col-form-label" for="select">Tipo Documento</label>
                <div class="col-9">
                    <select id="select" name="tipoDocumento" class="custom-select" aria-describedby="selectHelpBlock" required="required">
                        <option>Redacao</option>
                        <option>Dissertacao de Mestrado</option>
                        <option>TCC</option>
                        <option>Artigo</option>
                        <option>Resumo</option>
                        <option>Relatorio</option>
                        <option>Plano de Negocio</option>
                        <option>Projeto de Pesquisa</option>
                        <option>Estudo de Caso</option>
                        <option>Criticas</option>
                        <option>Monografia</option>
                        <option>Tese</option>
                        <option>Resenha</option>
                        <option>Fichamento</option>
                        <option>Outra</option>
                    </select>
                    <span id="selectHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">area</label>
                <div class="col-9">
                    <select id="text" name="area" class="custom-select" aria-describedby="textHelpBlock" required="required">
                        <option>Ciências Exatas e Terra</option>
                        <option>Ciências Biológicas</option>
                        <option>Engenharias</option>
                        <option>Ciências da Saúde</option>
                        <option>Ciências Agrárias</option>
                        <option>Ciências Sociais </option>
                        <option>Ciências Humanas</option>
                        <option>Linguística,Letras e Artes</option>
                        <option>Outra</option>
                    </select>
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Descricao</label>
                <div class="col-9">
                    <textarea  maxlength="255" id="text" type="text" name="descricao"  cols="40" rows="5" aria-describedby="textHelpBlock" required="required" class="form-control"></textarea>
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Data de Criação</label>
                <div class="col-9">
                    <input id="text" type="date" name="ano" placeholder="Autor"  aria-describedby="textHelpBlock" required="required" class="form-control">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="text" class="col-3 col-form-label">Documento</label>
                <div class="col-9">
                    <input  id="documento"  type="file" name="documento"   aria-describedby="textHelpBlock" required="required" class="form-control">
                    <span id="textHelpBlock" class="form-text text-muted">*campo obrigatorio</span>
                </div>
            </div>
            <input class="form-control mb-1" type="hidden" name="user_id" value="{{Auth::user()->id}} ">
            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

