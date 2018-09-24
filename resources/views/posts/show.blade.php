@extends('layouts.app');
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="standardMargin">
        <h1 style="font-size: 20px">{{$post->title}}</h1>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div>
    </div>
@endsection