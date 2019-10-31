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
                <label for="profileAge">年齢</label>
                <input class="form-control" type="nummber" name="age" id="profileAge" autocomplete="off" required autofocus value="{{$profile->age}}">
            </div>
            <div class="form-group">
                <label for="contact__email">自己紹介</label>
                <textarea class="form-control" name="introduction" cols="30" rows="3" required>{{$profile->introduction}}</textarea>
            </div>
            <div class="form-group">
                <label for="profileCareer">経歴</label>
                <input class="form-control" type="text" name="career" id="profileCareer" autocomplete="off" required value="{{$profile->career}}">
            </div>
            <div class="form-group">
                <label for="profileCertification">資格</label>
                <input class="form-control" type="text" name="certification" id="profileCertification" required autocomplete="off" value="{{$profile->certification}}">
            </div>
            <div class="form-group">
                <label for="profileSkill">スキル</label>
                <input class="form-control" type="text" name="skill" id="profileSkill" autocomplete="off" required value="{{$profile->skill}}">
            </div>
            <div class="form-group">
                <label for="profileGoal">目標</label>
                <input class="form-control" type="text" name="goal" id="profileGoal" autocomplete="off" required value="{{$profile->goal}}">
            </div>
            <div class="form-group">
                <label for="profileIcon">アイコン</label>
                @if(preg_match("/edit/", url()->current()))
                    <input class="form-control" type="text" name="icon" id="profileIcon" autocomplete="off" required value="{{Auth::user()->icon->image}}">
                @else
                    <input class="form-control" type="text" name="icon" id="profileIcon" autocomplete="off" required>
                @endif
            </div>
            <input class="btn btn-outline-primary btn-block" type="submit" value="{{$submit}}">
        </form>
    </div>
</div>
@endsection