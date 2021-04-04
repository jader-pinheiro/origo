@extends('layouts.main', ["current" => "planos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de planos</h5>


        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Plano</th>
                    <th>Mensalidade</th>
                </tr>
            </thead>
            <tbody>
    @foreach($plan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->plano}}</td>
                    <td>{{$p->mensalidae}}</td>
                </tr>
    @endforeach                
            </tbody>
        </table>
       
    </div>
    <div class="card-footer">
        <a href="/" class="btn btn-sm btn-primary" role="button">Voltar</a>
    </div>
</div>



@endsection