@extends('layouts.doc')

@section('vars')
  <?php $title = 'Introduction'; ?>
  @parent
@endsection

@section('content')
  <p>The Fuck Orbital API allows other applications to programmatically
    access the data contained in the Fuck Orbital web application. </p>

  <p>The API is currently version 1.0. All endpoints URLs start with
    <code>{{ url('api/v1') }}</code></p>

  <h2>Endpoints</h2>

  <ul>
    <li><a href="{{ action('HomeController@doc', ['fucks']) }}">
        <strong>Fucks</strong> - <code>{{ url('api/v1/fucks') }}</code></a></li>
  </ul>

  <hr>

  <h3>Response Format</h3>

  <p>The API will always response in <a href="https://en.wikipedia.org/wiki/JSON">JSON</a>.
    JSONP is available by using the <code>callback</code> query parameter</p>

  <h3>Response types</h3>

  <p>Responses come in lists and singular objects. </p>

  <h4>Lists</h4>

  <p>Lists represent collection of objects. Lists are paginated.
    The page you're retrieving is specified by the <code>page</code> query parameter,
    and the size of the page by <code>pagesize</code>. The default page size is
    {{ config('api.pagesize.default') }} while the maximum is {{ config('api.pagesize.max') }}.
  Each paginated request also comes other metadata that allows you to retrieve the
    next or previous page of content. </p>

  <p>The actual items will always appear under the <code>data</code> key. Here is an
    <a href="{{ action('ApiController@listFucks', ['pagesize' => 10]) }}">example call to the <span class="endpoint">fucks</span> endpoint</a>
    that shows all metadata returned by list endpoints:</p>

  <pre><code>{
    "total": 20,
    "per_page": "10",
    "current_page": 1,
    "last_page": 2,
    "next_page_url": "{{ url('v1/fucks?page=2') }}",
    "prev_page_url": null,
    "from": 1,
    "to": 10,
    "data": [...]
}</code></pre>

  <h4>Objects</h4>

  <p>Object endpoints require one or more semicolon separated IDs. The API will attempt to
    retrieve those items. Items that are not available will not appear in the results.
    The objects are not returned in any specific ordering. The maximum number of objects
    returned in a single query is {{ config('api.vectorized.max') }}. If more than
    {{ config('api.vectorized.max') }} IDs are requested, then only the first
    {{ config('api.vectorized.max') }} are returned. </p>

    <pre><code>{
    "total": 3,
    "data": [...]
}</code></pre>
@endsection
