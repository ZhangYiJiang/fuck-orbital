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
@endsection