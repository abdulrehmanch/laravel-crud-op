@extends('crud.master')

@section('content')
@include('crud.partials.alerts.errors')
<h1>Editing "{{ $task->name }}"</h1>
<p class="lead">Edit and save this contact below, or <a href="{{ route('crud.tasks.index') }}">go back to all contacts.</a></p>
<hr>


{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['crud.tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('username', 'User Name:', ['class' => 'control-label']) !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('likes', 'What would you like?:', ['class' => 'control-label']) !!}
    {!! Form::select('likes', array('PK' => 'Pakistan', 'US' => 'USA', 'UK' => 'UK'), array(), array('multiple')); !!}
</div>

<div class="form-group">
    {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
    {!! Form::label('Male', 'Male:', ['class' => 'control-label']) !!}
    {!! Form::radio('gender', 'male', ['class' => 'form-control']) !!}
    {!! Form::label('Female', 'Female:', ['class' => 'control-label']) !!}
    {!! Form::radio('gender', 'female', ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop