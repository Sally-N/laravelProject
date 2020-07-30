@extends('layouts.app')
@section('content')
     <h1>Posts</h3>
     @if(count($posts) > 0)
     @foreach($posts as $post)
         <div class="well">
          <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
               <small> Written on {{$post ->created_at}}</small>
         </div> 
      @endforeach           
     @else 
     <p>No posts</p>
     @endif
@endsection