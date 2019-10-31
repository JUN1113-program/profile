@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="col-md-8 mx-auto">
        <form action="/contact/" method="post" class="contactCreate__form">
            {{ csrf_field() }}
            <div class="form-group">
                    <label for="contactEmail">返信用アドレス</label>
                    <input class="form-control" type="email" name="email" id="contactEmail">
                </div>
            <div class="form-group">
                <label for="contactContent">お問い合わせ内容</label>
                <textarea class="form-control" name="content" id="contactContent" cols="30" rows="10" required autofocus></textarea>
            </div>
            <input class="btn btn-outline-primary btn-block" type="submit" value="問い合わせる">
        </form>
    </div>
</div>
@endsection