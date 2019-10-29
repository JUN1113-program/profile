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
                <label for="portfolioTitle">タイトル</label>
                <input class="form-control" type="text" name="title" id="portfolioTitle" autocomplete="off" required autofocus value="{{$portfolio->title}}">
            </div>
            <div class="form-group">
                <label for="contact__email">説明文</label>
                <textarea class="form-control" name="explanation" cols="30" rows="5" required>{{$portfolio->explanation}}</textarea>
            </div>
            <div class="form-group">
                <label for="portfolioEnv">開発環境</label>
                <input class="form-control" type="text" name="env" id="portfolioEnv" autocomplete="off" required value="{{$portfolio->env}}">
            </div>
            <div class="form-group">
                <label for="portfolioUrl">アプリケーションURL</label>
                <input class="form-control" type="text" name="url" id="portfolioUrl" autocomplete="off" value="{{$portfolio->url}}">
            </div>
            <div class="form-group">
                <label for="portfolioSrc">ソースコードURL</label>
                <input class="form-control" type="text" name="src" id="portfolioSrc" autocomplete="off" value="{{$portfolio->src}}">
            </div>
            <div class="form-group">
                <label for="portfolioSrc">添付画像</label>
                @if(preg_match("/edit/", url()->current()))
                    <input class="form-control" type="text" name="image" id="portfolioSrc" autocomplete="off" required value="{{$portfolio->image->image}}">
                @else
                    <input class="form-control" type="text" name="image" id="portfolioSrc" autocomplete="off" required>
                @endif
            </div>
            <input class="btn btn-outline-primary btn-block" type="submit" value="{{$submit}}">
        </form>
    </div>
</div>
@endsection