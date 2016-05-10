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
    <p>An Orbital project that meets the intermediate (Gemini) achievement level, created in one day.
      <a href="https://github.com/ZhangYiJiang/fuck-orbital">Read the project log or fork us on GitHub!</a></p>
  </header>
@endsection

@section('content')
  @include('components.success')
  <h1>Latest Fucks</h1>
  @each('fuck.single', $fucks, 'fuck')
@endsection
