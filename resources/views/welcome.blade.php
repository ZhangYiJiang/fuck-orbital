@extends('layouts.app')

@section('vars')
  <?php
    $bodyClass = 'home';
  ?>
@endsection

@section('header')
  <header>
  <h1>Dear Orbital:
  <a href="{{ action('FuckController@create') }}" class="finger">🖕</a></h1>
  </header>
@endsection

@section('content')
  <h1>Latest Fucks Given</h1>
  @each('fuck.single', $fucks, 'fuck')
@endsection
