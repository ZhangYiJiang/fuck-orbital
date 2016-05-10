{!! Form::open(['action' => 'FuckController@store']) !!}
  <div class="form-group">
    <label for="email" class="form-required">Email (only used for verification and will not be shown)</label>
    {!! Form::email('email', NULL, ['class' => 'form-control', 'required']) !!}
  </div>

  <div class="form-group">
    <label for="name">Name (optional)</label>
    {!! Form::text('name', NULL, ['class' => 'form-control', 'max' => '120']) !!}
  </div>

  <div class="form-group">
    <label for="fuck"></label>
    {!! Form::textarea('fuck', NULL, ['class' => 'form-control', 'required']) !!}
  </div>

{!! Form::close() !!}