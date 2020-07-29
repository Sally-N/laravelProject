@extends('layouts.app')

@section('content')
     <h1>{{$failedjobs->title}} </h1>
     @if(count($failedjobs) > 0)
     @foreach($failedjobs as $failedjob)
         <div class="well"> 
              <h3><a href="/failedjobs/{{$failedjobs->id}}"{{$failedjob->title}}></h3>
              <small> Written on {{$failedjobs->created_at}}</small>
         </div>
         
     @else 
     <p>No failed jobs found</p>
     @endif
@endsection