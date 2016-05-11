<div class="action">
  <a href="{{ action('FuckController@token', [$fuck]) }}" class="btn btn-sm btn-primary"
     target="_blank">Send Email</a>
  <a href="{{ action('FuckController@edit', [$fuck]) }}" class="btn btn-sm btn-primary"
     target="_blank">Edit</a>
  <a href="{{ action('FuckController@delete', [$fuck]) }}" class="btn btn-sm btn-danger"
     target="_blank">Delete</a>
</div>