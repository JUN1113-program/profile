@extends('layout')
@section('content')
<div class="blog">
    <div class="blog__content markdown-body">
        <h1 >{{$blog->title}}</h1>
        <p>{!! $blog->parse() !!}</p>
    </div>
</div>
@if(Auth::check())
    <footer class="footer">
        <div class="text-right m-3">
            <form action="/blog/{{$blog->id}}/edit" method="get">
                {{ csrf_field() }}
                <input class="btn btn-outline-primary" type="submit" value="編集する">
            </form>
        </div>
        <div class="text-right m-3">
            <form action="/blog/{{$blog->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <input class="btn btn-outline-primary" type="submit" value="削除する">
            </form>
        </div>
    </footer>
@endif
@endsection