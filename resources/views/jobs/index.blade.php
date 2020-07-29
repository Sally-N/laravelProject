@extends('pages.jobs')
@section('content')
     <h1>Jobs </h1>
     @if(count($datas) > 0)
     @foreach($datas as $failedjob)
         <div class="well"> 
              <h2><a href="/failedjobs/{{$failedjob ->connection}}" a></h2>
              <small> Written on {{$failedjob  ->created_at}}</small>
         </div> 
      @endforeach           
     @else 
     <p>No failed jobs found</p>
     @endif
@endsection