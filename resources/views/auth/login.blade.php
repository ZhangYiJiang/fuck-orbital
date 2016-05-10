@extends('layouts.app')

@section('vars')
  <?php
    $pageTitle = 'Login';
    $bodyClass = 'form narrow';
  ?>

@section('content')
<h1>Login</h1>
<form class="form-horizontal" role="form" method="POST" action="{{ action('AuthController@login') }}">
  {!! csrf_field() !!}

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">Email Address</label>

    <div class="col-md-6">
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
      <input id="password" type="password" class="form-control" name="password" required>

      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Remember Me
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary btn-lg">
        <i class="fa fa-btn fa-sign-in"></i> Login
      </button>
    </div>
  </div>
</form>
@endsection
