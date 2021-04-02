@extends('layouts.main', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Clientes</h5>

@if(count($cli) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Cliente</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($cli as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nome}}</td>
                    <td>
                        <a href="/clientes/edit/{{$c->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/clientes/delete/{{$c->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/clientes/novo" class="btn btn-sm btn-primary" role="button">Cadastrar Cliente</a>
    </div>
</div>



@endsection