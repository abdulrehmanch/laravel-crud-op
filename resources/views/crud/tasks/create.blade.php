@extends('crud.master')

@section('content')

<h1>Add a New Contact</h1>
<p class="lead">Add to your Contact below.</p>
@include('crud.partials.alerts.errors')
<hr>

{!! Form::open([
    'route' => 'crud.tasks.store'
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
    {!! Form::label('like', 'What would you like?:', ['class' => 'control-label']) !!}
    {!! Form::select('likes', array('PK' => 'Pakistan', 'US' => 'USA', 'UK' => 'UK'), array(), array('multiple')); !!}
</div>

<div class="form-group">
    {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
    {!! Form::label('Male', 'Male:', ['class' => 'control-label']) !!}
    {!! Form::radio('gender', 'male', ['class' => 'form-control']) !!}
    {!! Form::label('Female', 'Female:', ['class' => 'control-label']) !!}
    {!! Form::radio('gender', 'female', ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop

