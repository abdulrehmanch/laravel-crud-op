@extends('crud.master')

@section('content')

<h3>{{ $task->name }}</h3>
    <p>{{ $task->username}}</p>
    <p>{{ $task->email}}</p>
    <p>{{ $task->adderss}}</p>
    <p>{{ $task->likes}}</p>
    <p>{{ $task->gender}}</p>
<p class="lead">{{ $task->description }}</p>
<hr>

<a href="{{ route('crud.tasks.index') }}" class="btn btn-info">Back to all contact</a>
<a href="{{ route('crud.tasks.edit', $task->id) }}" class="btn btn-primary">Edit Contact</a>

<div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['crud.tasks.destroy', $task->id]
        ]) !!}
            {!! Form::submit('Delete this contact?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop