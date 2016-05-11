<div class="fuck">
  <div class="markdown">{!! $fuck->fuck_rendered !!}</div>

  <div class="meta">
    <p class="info"><a href="mailto:{{ $fuck->email }}" title="{{ $fuck->email }}">{{ $fuck->name }}</a> -
      <span title="{{ $fuck->created_at }}">{{ $fuck->created_at->diffForHumans() }}</span></p>

    <div class="action">
      <a href="{{ action('FuckController@token', [$fuck]) }}" class="btn btn-sm btn-primary"
         target="_blank">Send Email</a>
      <a href="{{ action('FuckController@edit', [$fuck]) }}" class="btn btn-sm btn-primary"
         target="_blank">Edit</a>
      <a href="{{ action('FuckController@delete', [$fuck]) }}" class="btn btn-sm btn-danger"
         target="_blank">Delete</a>
    </div>
  </div>
</div>