@extends('layouts.app')

@section('vars')
  <?php
  $pageTitle = 'Link Expired';
  $bodyClass = 'error';
  ?>
@endsection

@section('content')
  <h1>Ah shoot! You took too long!</h1>
  <p>The link that was sent to you expired. But fret not - click on the button below to get a new one</p>
  <p class="text-center">
    <a href="{{ action('FuckController@token', [$fuck]) }}" class="btn btn-primary btn-lg">
      Send Email Again</a></p>
@endsection