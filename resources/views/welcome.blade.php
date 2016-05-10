@extends('layouts.app')

@section('vars')
  <?php
    $bodyClass = 'home';
  ?>
@endsection

@section('header')
  <header class="home-header">
  <h1>Dear Orbital:
  <a href="{{ action('FuckController@create') }}" class="finger">
<pre>
           /´¯¯/)
          /¯   /
         /    /
     /´¯/    /´¯¯`·¸
 /'/   /    /      /¨¯\
('(    ´   ´    ¯~/'  ')
 \                    /
  \    \          _ ·´
   \              (
    \              \</pre>
    <span class="home-label">Fuck You</span>
  </a></h1>
    <p>An Orbital project that meets the intermediate (Gemini) achievement level, created in one day.
      <a href="https://github.com/ZhangYiJiang/fuck-orbital">Read more about the motivation, the project log
        or fork us on GitHub!</a></p>
  </header>
@endsection

@section('content')
  @include('components.success')
  <header>
    <a href="{{ action('FuckController@create') }}" class="btn btn-primary btn-lg pull-right">
      I have fucks to give</a>
    <h1>Latest Fucks</h1>
  </header>
  @each('fuck.single', $fucks, 'fuck')
@endsection
