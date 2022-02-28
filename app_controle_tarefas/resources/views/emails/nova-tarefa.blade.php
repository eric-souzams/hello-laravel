@component('mail::message')
{{ $tarefa }}

Data limite de conclusão da tarefa: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Ver Tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
