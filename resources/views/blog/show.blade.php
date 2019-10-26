@extends('layout')
@section('content')
<div class="blog">
    <div class="blog__content markdown-body">
        <h1 >{{$blog->title}}</h1>
        <p>{!! $blog->parse() !!}</p>
    </div>
</div>

@endsection