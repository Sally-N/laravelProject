@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                  

                    {{ __('You are logged in!') }}
                    <li><a href="/posts/create">Create Post</a></li>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table->stripped">
                        <tr>
                            <td>Title</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default"></td>
                            <td>
                                
                {!!Form::open(['action' => ['Postscontroller@destroy', $post->id], 'method' => 'POST', 'class' => 'pull right'])!!}
                {!!Form::hidden('_method', 'DELETE')!!}
                 {!!Form::submit('Delete', ['class' =>  'btn btn-danger'])!!}
                 {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else 
                    <p> You have no posts </p>
                    @endif   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
