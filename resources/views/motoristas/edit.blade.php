@extends('motoristas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Motorista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('motoristas.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Alerta!</strong> Existe algum problema com o campo.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('motoristas.update',$motorista->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nome" value="{{ $motorista->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cpf:</strong>
                    <input type="text" name="cpf" value="{{ $motorista->cpf }}" maxlength="16" class="form-control" placeholder="Cpf">
                </div>
            </div>        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="mail" name="email" value="{{ $motorista->email }}" class="form-control" placeholder="Email">
                </div>
            </div>         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Situação:</strong>
                    <select name="situacao" id="situacao" value="{{ $motorista->situacao }}" class="form-control" required="required">
                        <option value=""></option>
                        <option value="L">Livre</option>
                        <option value="C">Em Curso</option>
                        <option value="R">Retornando</option>
                    </select>
                </div>
            </div>        
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group form-check">
                    <strong>Status:</strong>
                    <br/>
                    <label class="form-check-label">
                        <input type="checkbox" id="status" name="status" value="A" class="form-check-input"/> Ativo
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    <script type="text/javascript">
        document.querySelector("#situacao").value="{{ $motorista->situacao }}";
        let status = "{{ $motorista->status }}";
        if (status == 'A') {
            document.querySelector("#status").checked = true;
        }

    </script>
@endsection