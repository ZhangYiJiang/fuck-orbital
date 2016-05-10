@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'Delete your fuck? :(';
    $bodyClass = 'narrow';
  ?>
@endsection

@section('content')
  {!! Form::open(['action' => ['FuckController@trash',  $fuck->id]]) !!}
    <p>Your fuck will be gone forever if you click the button below - no second chances!</p>
    {!! Form::hidden('token', $fuck->token) !!}
    {!! Form::button('Yes, really delete my fuck :(', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg']) !!}
  {!! Form::close() !!}
@endsection
