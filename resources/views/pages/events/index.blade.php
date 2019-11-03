@extends('layouts.app')

@section('content')
        
    <h3>Highlighted event</h3>
    <hr>

    <div class="jumbotron">
        @if($highlighted)
        <h3>{{$highlighted->title}}</h3>
        <p class="lead">{{$highlighted->description}}</p>
        <hr>
        <p class="text-muted">
            This event will take place on {{$highlighted->date}}.
        </p>
        <a href="/events/{{$highlighted->id}}">
            <button class="btn btn-primary float-right">Learn more about this event</button>
        </a>

        @else 
        <h3>No highlighted event</h3>
        <hr>
        @endif

    </div>

    <h3>Upcoming events</h3>
    <hr>
    
    @if(count($events) > 0)
    <table class="table table-hover table-striped table-light">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Posted by</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{$event->title}}</td>
                <td>{{$event->date}}</td>
                <td>{{$event->user->username}}</td>
                <td class="float-right">
                    <a href="{{ action('EventsController@highlight', $event->id) }}">
                        @if($event->highlight == true)
                        <i class="material-icons text-warning">star</i>
                        @else
                        <i class="material-icons text-warning">star_border</i>
                        @endif
                    </a>

                    <a href="/events/{{$event->id}}">
                        <button class="btn btn-primary">Find out more</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$events->links('includes.paginator')}}

    @else
        <div class="card my-3">
                <div class="card-body">
                    <h2 class="card-title">No events yet</h2>
                    <p class="card-text">But don't worry, I'm sure someone'll post something soon!</p>
                </div>
            <p></p>
        </div>
    @endif

    @auth
    <a href="events/create" class="text-dark float-right">
        <button class="btn btn-primary">
            <i class="material-icons">add</i>
            Create new event
        </button>
    </a>
    @endauth

@endsection
