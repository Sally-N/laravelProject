@extends('layouts.app')

@section('content')
   <h1>Create Post</h1>
   {!! Form::open(['action' => 'Postscontroller@store', 'method' => 'POST']) !!}
   <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tiltle'] )}}
   </div>
   <div class="form-group">
   {{Form::label('body', 'Title')}}
   {{Form::textarea('editor1', '', ['id' => 'article-ckeditor', 'class' => 'article-ckeditor form-control', 'placeholder' => 'Body text'] )}}
   </div>
   {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection