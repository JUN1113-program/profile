@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
        @foreach ($contacts as $contact)
            <div class="mt-3 col-md-8">
                <div class="card">
                    <div class="card-header">
                        Contact from {{$contact->email}}
                        <div class="float-md-right">
                            <form action="/contact/{{$contact->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="close" type="submit">&times;</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        {{$contact->content}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
