<p>Hey, it looks like you wanted to edit the following fuck on Fuck Orbital:</p>

<p>Fuck #{{ $fuck->id }}<br>
Name: {{ $fuck->name }}</p>

{!! $this->fuck_rendered  !!}

<p>If that's the case, use these links to <br>
Edit: <a href="{{ $fuck->link('edit') }}">{{ $fuck->link('edit') }}</a><br>
Delete: <a href="{{ $fuck->link('delete') }}">{{ $fuck->link('delete') }}</a></p>

<p>If you didn't want to edit this fuck, you can safely ignore this email</p>