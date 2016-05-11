@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = $title . ' | API Documentation';
    $bodyClass = 'docs';
  ?>
@endsection

@section('header')
  @parent

  <header>
    <h2><a href="{{ action('HomeController@doc') }}">API Documentation</a></h2>
    <h3>{{ $title }}</h3>
  </header>
@endsection