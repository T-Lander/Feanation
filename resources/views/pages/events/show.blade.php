@extends('layouts.app')

@section('content')
    
    <h3>{{$event->title}}</h3>

    <hr>
    <p>This event was posted on {{$event->created_at}}.</p><br>

    <div class="row">
        <a href="/events/{{$event->id}}/edit" class="btn btn-outline-primary float-right mx-1">Edit this event</a><br>
            
        <form class="float-right mx-1"action="{{ action('EventsController@destroy', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">Delete event</button>
        </form>
    </div>

    <a href="/events" class="text-muted">< Go back</a>

@endsection
