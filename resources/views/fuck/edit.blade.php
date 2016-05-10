@extends('layouts.app')

@section('vars')
  <?php
  $pageTitle = 'Editing Fuck #' . $fuck->id;
  $bodyClass = 'form';
  ?>
@endsection

@section('content')
  <h1>Editing Fuck #{{ $fuck->id }}</h1>

  {!! Form::model($fuck, ['action' => 'FuckController@update']) !!}
    @include('components.errors')
    @include('fuck.form')

    {!! Form::button('Save Your Fuck', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) !!}
    or <a href="{{ action('FuckController@show', [$fuck]) }}">I don't give a fuck</a>
  {!! Form::close() !!}
@endsection