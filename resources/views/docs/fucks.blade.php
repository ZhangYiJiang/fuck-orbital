@extends('layouts.doc')

@section('vars')
  <?php $title = 'Fucks'; ?>
  @parent
@endsection

@section('content')
  <p>These endpoints return <code>fuck</code> objects. Each fuck object has the following:</p>
  <dl>
    <dt><code>id</code> - int</dt>
    <dd>The ID of the fuck</dd>

    <dt><code>name</code> - string (120 char)</dt>
    <dd>The name of the person giving the fuck. If not available, the string
      'Anonymous' will be returned instead.</dd>

    <dt><code>fuck_rendered</code> - string (HTML, arbitrary length)</dt>
    <dd>The fuck, rendered in HTML. Only tags available in Markdown will
      also be available here, which means this is sanitized and safe to inject directly
      into pages, but beware of images and links. </dd>

    <dt><code>created_at</code> - string (timestamp)</dt>
    <dd>The creation timestamp of the fuck</dd>

    <dt><span class="label label-danger" title="This value is not always returned">!</span>
      <code>fuck</code> - string (Markdown, arbitrary length)</dt>
    <dd>The fuck, in Markdown source. This is <strong>NOT</strong> guaranteed to be safe, since
      this is the raw input from the user. Use the <code>source</code> parameter to enable this. </dd>
  </dl>

  <pre><code>{
      "id": 1,
      "name": "Anonymous",
      "fuck_rendered": "&lt;p&gt;Aliquam ullam ut laudantium fugiat exercitationem. Eveniet quo eos aut cumque fuga natus. Non dolorum nam quibusdam distinctio.&lt;/p&gt;",
      "created_at": "2016-05-10 06:58:22"
      }</code></pre>

  <hr>

  <p>The following query parameters are accepted on all endpoints:</p>

  <dl>
    <dt><code>source</code> - boolean</dt>
    <dd>Set to any value to enable the source of the fuck be returned by the API.
      Remember to properly sanitize this value before using it.</dd>
  </dl>

  <hr>

  <h4><span class="optional label label-success">GET</span> <span class="label label-info">List</span>
    <span class="endpoint">fucks</span></h4>

  <p>Obtain a list of fucks, sorted chronologically with the most recent first. </p>

  <h4><span class="label label-success">GET</span> <span class="label label-info">Objects</span>
    <span class="endpoint">fucks/{fuck_ids}</span></h4>

  <p>Obtain the fucks with the specified IDs </p>
@endsection
