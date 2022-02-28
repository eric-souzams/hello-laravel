@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefa: {{$tarefa->tarefa}}</div>

                <div class="card-body">
                    <fieldset>
                        <div class="form-group">
                            <label for="data_limite_conclusao">Data Limite de Conclusão</label>
                            <input type="date" class="form-control" id="data_limite_conclusao" value="{{$tarefa->data_limite_conclusao}}">
                        </div>
                        
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
