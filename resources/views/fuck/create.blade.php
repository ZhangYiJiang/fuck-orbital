@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'New Fuck';
    $bodyClass = 'form narrow';
  ?>
@endsection

@section('content')
  <h1>Giving a New Fuck</h1>

  {!! Form::open(['action' => 'FuckController@store']) !!}
    @include('components.errors')

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', NULL, ['class' => 'form-control', 'required',
        'placeholder' => 'email@example.com']) !!}
      <p class="help-block">only used for verification and will not be shown</p>
    </div>

    @include('fuck.form')

    {!! Form::button('Submit Your Fuck', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) !!}
    <a href="{{ url('/') }}">I don't actually give a fuck</a>
  {!! Form::close() !!}
@endsection