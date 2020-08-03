@extends('layouts.app')
<div class="container">
     @section('content')
     <h1>Posts</h1>
     @if(count($posts) > 0)
     @foreach($posts as $post)
         <div class="well">
         </div> 
         <div class="card  mt-2 shadow" >
          <div class="card-body">
            <h5 class="card-title">
               <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2></h5>
            <h6 class="card-subtitle mb-2 text-muted">
               <small> Written on {{$post ->created_at}} by {{$post->user->name}}</small></h6>
            <p class="card-text">{{$post->body}}</p> 
             @if (!Auth::guest())
            @if (Auth::user()->id == $post->user->id)
          
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
                
            @endif       
            @endif
         
          </div>
        </div>
     @endforeach          
     @else 
     <p>No posts</p>
     @endif
@endsection
</div>