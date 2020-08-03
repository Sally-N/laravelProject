@extends('layouts.app')

@section('content')
   <h1>Edit Post</h1>
   {!! Form::open(['action' => ['Postscontroller@update', $post->id], 'method' => 'POST']) !!}
   <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Tiltle'] )}}
   </div>
   <div class="form-group">
   {{Form::label('body', 'Title')}}
   {{Form::textarea('editor1', $post->title, ['id' => 'article-ckeditor', 'class' => 'article-ckeditor form-control', 'placeholder' => 'Body text'] )}}
   </div>
   {{Form::hidden(-'method', 'PUT')}}
   {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection