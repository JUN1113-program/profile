@extends('layout')
@section('content')
<div class="blogs">
  @foreach($blogs as $blog)
    <div class="blogs__blog">
        <a href="blog/{{$blog->id}}">{{$blog->title}}</a>
    </div>
  @endforeach
</div>

@endsection