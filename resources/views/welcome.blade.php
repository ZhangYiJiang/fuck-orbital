@extends('layouts.app')

@section('vars')
  <?php
    $bodyClass = 'home';
  ?>
@endsection

@section('header')
  <header>
  <h1>Dear Orbital
  <a href="{{ action('FuckController@create') }}" class="finger">🖕</a>
    you</h1>
  </header>
@endsection

@section('content')

@endsection
