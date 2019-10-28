@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-10 mx-auto">
        <form action= {{$action}} method="post">
            {{ csrf_field() }}
            @if(preg_match("/edit/", url()->current()))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="blogTitle">タイトル </label>
            <input class="form-control" type="text" name="title" id="blogTitle" autocomplete="off" required autofocus value="{{$blog->title}}">
            </div>
            <div class="form-group">
                <label for="contact__email">本文</label>
                <textarea class="form-control" name="content" cols="30" rows="20" required>{{$blog->content}}</textarea>
            </div>
            <input class="btn btn-outline-primary btn-block" type="submit" value="{{$submit}}">
        </form>
    </div>
</div>
@endsection