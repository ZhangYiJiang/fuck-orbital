<div class="fuck">
  <figure>
    <blockquote>{!! $fuck->fuck_rendered !!}</blockquote>

    <figcaption><span class="name">{{ $fuck->name }}</span> -
      <span class="timestamp">{{ $fuck->created_at->diffForHumans() }}</span></figcaption>
  </figure>
</div>
