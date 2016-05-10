@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'New Fuck';
    $bodyClass = 'form';
  ?>
@endsection

@section('content')
  <h1>New Fuck</h1>

  {!! Form::open(['action' => 'FuckController@store']) !!}
    @include('components.errors')

    <div class="form-group">
      {!! Form::label('email', 'Email (only used for verification and will not be shown)') !!}
      {!! Form::email('email', NULL, ['class' => 'form-control', 'required']) !!}
    </div>

    @include('fuck.form')

    {!! Form::button('Submit Your Fuck', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) !!}
    <a href="{{ url('/') }}">I don't give a fuck</a>
  {!! Form::close() !!}
@endsection