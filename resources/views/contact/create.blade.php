@extends('layout')
@section('content')
<div class="contactCreate">
    <form action="/contact" method="post" class="contactCreate__form">
        {{ csrf_field() }}
        <label for="contact__content">お問い合わせ内容 </label>
        <textarea class="contactCreate__form__input" name="content" id="contact__content" cols="30" rows="10" required autofocus></textarea>
        <label for="contact__email">返信用アドレス</label>
        <input class="contactCreate__form__input" type="email" name="email" id="contact__email">
        <input class="contactCreate__form__submit "type="submit" value="送信する">
    </form>
</div>
@endsection