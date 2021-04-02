@extends('layouts.main', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes/{{$cli->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome </label>
                <input type="text" class="form-control" name="nomeCliente" value="{{$cli->nome}}"
                       id="nomeCliente" placeholder="Nome" required>
                     
                        <label for="emailCliente">Email </label>
                       <input type="text" class="form-control" name="emailCliente" value="{{$cli->email}}"
                       id="emailCliente" placeholder="Email" required>
                      
                        <label for="telefoneCliente">telefone </label>
                       <input type="text" class="form-control" name="telefoneCliente" value="{{$cli->telefone}}"
                       id="telefoneCliente" placeholder="telefone" required>
                       
                        <label for="estadoCliente">Estado </label>
                       <input type="text" class="form-control" name="estadoCliente" value="{{$cli->estado}}"
                       id="estadoCliente" placeholder="estado" required>
                         
                        <label for="cidadeCliente">Cidade </label>
                       <input type="text" class="form-control" name="cidadeCliente" value="{{$cli->cidade}}"
                       id="cidadeCliente" placeholder="Cidade" required>
                        
                        <label for="nascCliente">Dt. Nascimento </label>
                       <input type="text" class="form-control" name="nascCliente" value="{{$cli->data_nasc}}"
                       id="nascCliente" placeholder="Dt. Nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection