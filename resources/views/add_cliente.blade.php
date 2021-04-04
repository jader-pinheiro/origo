@extends('layouts.main', ["current" => "clientes"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/clientes" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="text" class="form-control" name="nomeCliente" 
                       id="nomeCliente" placeholder="Cliente" required>
                 
                <label for="emailCliente">Email </label>
                <input type="text" class="form-control" name="emailCliente" 
                       id="emailCliente" placeholder="Nome" required>
                
               <label for="telefoneCliente">Telefone</label>
                <input type="text" class="form-control" name="telefoneCliente" 
                       id="telefoneCliente" placeholder="Telefone" required>   
                    
               <label for="estadoCliente">Estado</label>
                <input type="text" class="form-control" name="estadoCliente" 
                       id="estadoCliente" placeholder="Estado" required> 

               <label for="cidadeCliente">Cidade</label>
                <input type="text" class="form-control" name="cidadeCliente" 
                       id="cidadeCliente" placeholder="Cidade" required> 
                       
               <label for="nascCliente">Dt. Nascimento</label>
                <input type="text" class="form-control" name="nascCliente" 
                       id="nascCliente" placeholder="Dt. Nascimento" required>                        
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
             <a href="/clientes" class="btn btn-danger btn-sm" role="button">Cancelar</a>
        </form>
    </div>
</div>

@endsection