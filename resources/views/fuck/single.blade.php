<div class="fuck">
  <figure>
    <blockquote class="{{ strlen($fuck->fuck) > 300 ? 'long' : 'short' }}">
      {!! $fuck->fuck_rendered !!}</blockquote>

    <figcaption><span class="name">{{ $fuck->name }}</span> -
      <a href="{{ action('FuckController@show', [$fuck]) }}" class="timestamp">
        {{ $fuck->created_at->diffForHumans() }}</a></figcaption>

    @if (Auth::check())
      @include('admin.actions', compact('fuck'))
    @endif
  </figure>
</div>
