@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'Admin';
    $bodyClass = 'admin';
  ?>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('header')
  @parent

@endsection