@extends('layout')
@section('content')
@foreach($portfolios as $portfolio)
<div class="portfolios">
    <div class="portfolios__content">
        <p class="portfolios__content__top">タイトル</p>
        <p>{{$portfolio->title}}</p>
        <p class="portfolios__content__top">アプリ概要</p>
        <p>{{$portfolio->explanation}}</p>
        <p class="portfolios__content__top">使用技術</p>
        <p>{{$portfolio->env}}</p>
        <p class="portfolios__content__top">URL</p>
        <a href = "{{$portfolio->url}}" target="_blank"> アプリケーション</a>
        <a href = "{{$portfolio->src}}" target="_blank"> ソースコード</a>
        <p class="portfolios__content__top">Image</p>
        <img class="portfolios__content__image" src={{$portfolio->image->image}}>
    </div>
    <div class="text-right m-3">
        <form action="/portfolio/{{$portfolio->id}}/edit" method="get">
            {{ csrf_field() }}
            <input class="btn btn-outline-primary" type="submit" value="編集する">
        </form>
    </div>
    <div class="text-right m-3">
        <form action="/portfolio/{{$portfolio->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input class="btn btn-outline-primary" type="submit" value="削除する">
        </form>
    </div>
</div>

@endforeach
@endsection