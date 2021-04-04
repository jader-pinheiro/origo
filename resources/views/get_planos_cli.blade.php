@extends('layouts.main', ["current" => "clientes"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Planos de Clientes - {{$cli->nome}}</h5>

       {{-- @if(count($cli) > 0) --}}
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código do Plano</th>
                    <th>Nome do Plano</th>
                    <th>Mensalidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nomePlano as $p)
                <tr>
                    <td>{{$p->id}}</td>                               
                    <td>{{$p->plano}}</td>
                    <td>{{$p->mensalidade}}</td>
                     
                    <td>
                        {{-- <a href="/clientes/edit/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a> --}}
                        @if ($p->plano == 'free')
                        <a href="/planos/delete/{{$p->id}}" class="btn btn-sm btn-danger disabled" aria-disabled="true" >Apagar</a>
                        @else
                        <a href="/planos/delete/{{$p->id}}" class="btn btn-sm btn-danger" >Apagar</a>
                        @endif
                        {{-- <a href="/clientes/get_planos/{{$cli->id}}" class="btn btn-sm btn-warning">Listar Planos</a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- @endif --}}
    </div>
    <div class="card-footer">
        <a href="/clientes" class="btn btn-sm btn-primary" role="button">Voltar</a>
    </div>
</div>



@endsection