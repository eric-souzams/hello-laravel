@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Tarefas</span>

                    <span>
                        <a href="{{ route('tarefa.create') }}">Nova Tarefa</a>
                    </span>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $tarefa)
                                <tr>
                                    <th scope="row">{{ $tarefa->id }}</th>
                                    <td>{{ $tarefa->tarefa }}</td>
                                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                                    <td><a href="{{ route('tarefa.edit', ['tarefa' => $tarefa->id]) }}">Editar</a></td>
                                    <td>
                                        <form id="form_{{$tarefa->id}}" action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="document.getElementById('form_{{$tarefa->id}}').submit()">Excluir</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Anterior</a></li>
                            @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                                <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $tarefas->url($i) }}">{{$i}}</a>
                                </li>
                            @endfor
                            <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Proximo</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
