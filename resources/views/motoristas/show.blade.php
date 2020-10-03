@extends('motoristas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Motorista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('motoristas.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $motorista->nome }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cpf:</strong>
                    {{ $motorista->cpf }}
                </div>
            </div>        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $motorista->email }}
                </div>
            </div>         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Situação:</strong>
                    @switch($motorista->situacao)
                        @case('L')
                            Livre
                            @break

                        @case('C')
                            Em Curso
                            @break
                        @case('R')
                            Retornando
                            @break
                        @default
                            {{ $motorista->situacao }}
                    @endswitch
                </div>
            </div>        
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group form-check">
                    <strong>Status:</strong>
                    @if ($motorista->status == 'A')
                        Ativo
                    @endif
                </div>
            </div>
    </div>
@endsection