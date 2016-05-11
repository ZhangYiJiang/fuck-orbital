@extends('layouts.admin')

@section('content')
  {!! $fucks->links() !!}
  @each('admin.fuck', $fucks, 'fuck')
  {!! $fucks->links() !!}
@endsection