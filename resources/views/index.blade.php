@extends('layouts.main', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Lista de Planos</h5>
                    <p class="card=text">
                        Planos
                    </p><br>
                    <a href="/planos" class="btn btn-primary">Continuar</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card=text">
                        Cadastro de Clientes
                    </p>
                    <a href="/clientes" class="btn btn-primary">Continuar</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection