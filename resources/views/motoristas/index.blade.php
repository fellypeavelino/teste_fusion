@extends('motoristas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('motoristas.create') }}"> Cadastrar novo Motorista</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Email</th>
            <th>Situação</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($motoristas as $motorista)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $motorista->nome }}</td>
            <td>{{ $motorista->cpf }}</td>
            <td>{{ $motorista->email }}</td>
            @switch($motorista->situacao)
                @case('L')
                    <td>Livre</td>
                    @break

                @case('C')
                    <td>Em Curso</td>
                    @break
                @case('R')
                    <td>Retornando</td>
                    @break
                @default
                    <td>{{ $motorista->situacao }}</td>
            @endswitch
            @if ($motorista->status == 'A')
                <td>Ativo</td>
            @else
                <td></td>
            @endif
            <td>
                <form action="{{ route('motoristas.destroy',$motorista->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('motoristas.show',$motorista->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('motoristas.edit',$motorista->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $motoristas->links() !!}
      
@endsection