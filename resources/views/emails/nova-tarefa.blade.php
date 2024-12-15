@component('mail::message')
# {{ $tarefa }}

Data limite de conclusão: {{ $data_limite_conclusao }}

Data limite de conclusão

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
