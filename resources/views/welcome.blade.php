@extends('layout')
@section('content')
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif
<div class="top">
    <a href="/portfolio" class="top__item">
        PORTFOLIO
    </a>
    <a href="/profile" class = "top__item">
        PROFILE
    </a>
    <a href="/blog" class="top__item">
        BLOG
    </a>
    <a href="/contact" class="top__item">
        CONTACT
    </a>
</div>

@endsection