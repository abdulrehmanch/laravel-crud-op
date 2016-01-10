@extends('crud.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">C.R.U.D. Operations</p>
<hr>

<a href="{{ route('crud.tasks.index') }}" class="btn btn-info">View Contacts</a>
<a href="{{ route('crud.tasks.create') }}" class="btn btn-primary">Add New Contact</a>

@stop