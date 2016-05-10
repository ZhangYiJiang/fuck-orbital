<div class="form-group">
  {!! Form::label('name', 'Name (optional)') !!}
  {!! Form::text('name', NULL, ['class' => 'form-control', 'max' => '120',
    'placeholder' => 'Boaty McBoatface']) !!}
  <p class="help-block">leave blank for anonymous submission</p>
</div>

<?php
  $placeholder = collect([
    'My partner leaves all the work to me and never does anything',
    'Coding feels harder than summoning the elder gods from the fifth dimension',
    "I got too ambitious with my project and now I can't finish it on time",
    "I lost motivation half way through",
    "My partner keeps trying to make me watch some strange cartoon about colorful ponies",
  ])->random();
?>

<div class="form-group">
  {!! Form::label('fuck', "Fuckin' why?") !!}
  {!! Form::textarea('fuck', NULL, ['class' => 'form-control', 'required',
    'placeholder' => 'eg. '.$placeholder]) !!}
  <p class="help-block">Markdown supported -
    <code>_italics_</code>, <code>**bold**</code>, etc.</p>
</div>