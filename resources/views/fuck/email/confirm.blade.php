<p>Hey, it looks like you wanted to post the following fuck on Fuck Orbital:</p>

<p>Fuck #{{ $fuck->id }}<br>
  Name: {{ $fuck->name }}</p>

{!! $fuck->fuck_rendered !!}

<p>If that is indeed you, please confirm this by clicking on this link:
  <a href="{{ $fuck->link('confirm') }}">{{ $fuck->link('confirm') }}</a></p>

<p>You can also use these links to <br>
  Edit: <a href="{{ $fuck->link('edit') }}">{{ $fuck->link('edit') }}</a><br>
  Delete: <a href="{{ $fuck->link('delete') }}">{{ $fuck->link('delete') }}</a></p>

<p>If you didn't post this fuck, you can safely ignore this email</p>