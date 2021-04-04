@extends('layouts.main', ["current" => "alert"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">OPSS !!</h5>
                    <p class="card=text">
                        Cliente possui plano free no Estado de São Paulo. Não é possivel excluí-lo
                    </p><br>
                    <a href="/clientes" class="btn btn-primary">voltar</a>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection