@extends('layouts.app')
@section('content')
     <a href="/posts" class="btn btn-default">Go Back</a>
     <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{$post->body}}
    </div>
@endsection