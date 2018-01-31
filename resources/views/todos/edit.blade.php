@extends('layout.app')

@section('content')
<a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
<h1>Edits Todo</h1>
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT')}}
    {{ Form::bsSubmit('Submit', ['class' => 'btn bnt-primary']) }}
{!! Form::close() !!}
@endsection