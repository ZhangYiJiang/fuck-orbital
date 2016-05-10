@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = '503';
    $bodyClass = 'error';
  ?>
@endsection

@section('content')
  <h1>Fuck! Something went wrong</h1>
  <p>Sorry, it's our fault, not yours. Don't worry, the error has been recorded
    and we'll get to it as soon as possible. In the meantime, why not check out the
    latest fucks given on our homepage?</p>
  <p class="text-center"><a href="{{ url('/') }}" class="btn btn-primary btn-lg">
      Back to Home</a></p>
@endsection