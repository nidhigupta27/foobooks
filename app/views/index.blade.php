@extends('_master')
@section('content')
   <h1>Welcome to Foobooks </h1>

@section('content')

  {{ Form::open(array('url' => '/list','method' => 'GET')) }}
     {{ Form::label('query','Search') }}
     {{ Form::text('query') }}
     {{ Form::submit('Search') }}
  {{ Form::close() }}

@stop