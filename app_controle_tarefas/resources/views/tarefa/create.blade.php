@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>

                <div class="card-body">
                    <form action="{{ route('tarefa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tarefa">Tarefa</label>
                            <input type="text" class="form-control" id="tarefa" name="tarefa" placeholder="Nome da Tarefa">
                        </div>
                        <div class="form-group">
                            <label for="data_limite_conclusao">Data Limite de Conclusão</label>
                            <input type="date" class="form-control" id="data_limite_conclusao" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar Tarefa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
