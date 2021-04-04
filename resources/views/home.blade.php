@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Logado com sucesso') }}
                   <div class="card-footer">
                     <a href="/" class="btn btn-sm btn-primary" role="button">Ir para o painel</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
