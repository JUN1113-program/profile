@extends('layout')
@section('content')
<div class="profile">
    <div class="profile__content">
        <p class="profile__content__top">名前</p>
        <p>{{$profile->user->name}}</p>
        <p class="profile__content__top">年齢</p>
        <p>{{$profile->age}} 歳</p>
        <p class="profile__content__top">自己紹介</p>
        <p>{!! nl2br(e($profile->introduction)) !!}</p>
        <p class="profile__content__top">経歴</p>
        <p>{!! nl2br(e($profile->career)) !!}</p>
        <p class="profile__content__top">資格</p>
        <p>{!! nl2br(e($profile->certification)) !!}</p>
        <p class="profile__content__top">スキル</p>
        <p>{!! nl2br(e($profile->skill)) !!}</p>
        <p class="profile__content__top">目標</p>
        <p>{!! nl2br(e($profile->goal)) !!}</p>
        <img class="icon" src="{{$profile->user->icon->image}}">
    </div>
</div>
@endsection