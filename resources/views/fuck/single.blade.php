<div class="fuck">
  <figure>
    <blockquote>{!! $fuck->fuck_rendered !!}</blockquote>

    <figcaption><span class="name">{{ $fuck->name }}</span> -
      <a href="{{ action('FuckController@show', [$fuck]) }}" class="timestamp">
        {{ $fuck->created_at->diffForHumans() }}</a></figcaption>
  </figure>
</div>
