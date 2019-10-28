@extends('layouts.app')

@section('content')
    
    <h3>Upcoming events</h3>
    <hr>
    
    @if(count($events) > 0)

        @foreach($events as $event)
            <div class="card my-3">
                <img class="card-img-top" src="">
                <div class="card-body">
                    <h2 class="card-title">{{$event->title}}</h2>
                    <p class="card-subtitle text-muted ">Event date goes here.</p><br>
                    <p class="card-text">{{$event->description}}</p><br>
                    <a href="/events/{{$event->id}}" class="btn btn-primary btn-sm">Find out more</a>
                    <p class="text-muted float-right">Posted on {{$event->created_at}}</p>
                </div>
            </div> 
        @endforeach

        {{$events->links('includes.paginator')}}

    @else
        <div class="card my-3">
            <h1>No events yet</h1>
            <p>But don't worry, I'm sure someone'll post something soon!</p>
        </div>
    @endif

@endsection
