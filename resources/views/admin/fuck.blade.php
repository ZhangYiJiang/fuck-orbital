<div class="fuck">
  <div class="markdown">{!! $fuck->fuck_rendered !!}</div>

  <div class="meta">
    <p class="info"><a href="mailto:{{ $fuck->email }}" title="{{ $fuck->email }}">{{ $fuck->name }}</a> -
      <span title="{{ $fuck->created_at }}">{{ $fuck->created_at->diffForHumans() }}</span></p>

    @include('admin.actions', compact('fuck'))
  </div>
</div>