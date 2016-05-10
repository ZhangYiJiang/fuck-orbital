@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'Fuck #' . $fuck->id;
    $bodyClass = 'fuck narrow';
  ?>
@endsection


@section('content')
  @include('components.success')
  @include('fuck.single')
  <p>If you were the one who posted this,
    <a href="{{ action('FuckController@token', [$fuck]) }}">click here to edit / delete your fuck.</a></p>
@endsection