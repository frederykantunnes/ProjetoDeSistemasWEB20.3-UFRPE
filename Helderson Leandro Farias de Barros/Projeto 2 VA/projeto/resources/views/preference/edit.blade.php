@extends('layouts.app')

@section('title', $title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">Editar preferências</div>
                <div class="card-body">
                    <form action="{{route('edit_preference')}}" method="POST">
                        @csrf
                        <div class=form-check>
                            <input type="checkbox" id="política" name="1" <?php if ($data["1"] == "checked"){ echo "checked";}?>>
                            <label for="política">Política</label>
                        </div>

                        <div class=form-check>
                            <input type="checkbox" id="entretenimento" name="2" <?php if ($data["2"] == "checked"){ echo "checked";}?>>
                            <label for="entretenimento">Entretenimento</label>
                        </div>

                        <div class=form-check>
                            <input type="checkbox" id="ciência" name="3" <?php if ($data["3"] == "checked"){ echo "checked";}?>>
                            <label for="ciência">Ciência</label>
                        </div>

                        <div class=form-check>
                            <input type="checkbox" id="tecnologia" name="4" <?php if ($data["4"] == "checked"){ echo "checked";}?>>
                            <label for="tecnologia">Tecnologia</label>
                        </div>

                        <div class=form-check>
                            <input type="checkbox" id="esportes" name="5" <?php if ($data["5"] == "checked"){ echo "checked";}?>>
                            <label for="esportes">Esportes</label>
                        </div>

                        <button class="btn btn-success">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
