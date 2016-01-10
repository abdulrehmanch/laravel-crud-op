@extends('crud.master')

@section('content')

<h1>Contacts</h1>
<p class="lead">Contact List.</p>

<hr>
@foreach($tasks as $task)
    <h3>Name: {{ $task->name }}</h3>
    <p> User Name: {{ $task->username}}</p>
    <p> Email:   {{ $task->email}}</p>
    <p> Address: {{ $task->address}}</p>
    <p> Likes:   {{ $task->likes}}</p>
    <p> Gender:  {{ $task->gender}}</p>
    
    <p>
        <a href="{{ route('crud.tasks.show', $task->id) }}" class="btn btn-info">View Contact</a>
        <a href="{{ route('crud.tasks.edit', $task->id) }}" class="btn btn-primary">Edit Contact</a>
    </p>
    
    <hr>
@endforeach

@stop