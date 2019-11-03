@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>{{$event->title}}</h3>
            </div>
        
            <div class="card-text">
                <p>{{$event->description}}</p>
                <hr>

                <p class="text-muted">This event was posted on {{$event->created_at}}.</p><br>
            </div>

            <div class="card-text">
                <button class="btn btn-secondary float-left"><a href="/events" class="text-light">Go back</a></button>

                @if(Auth::id() == $event->user_id)
                <form class="mx-1"action="{{ action('EventsController@destroy', $event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger float-right" type="submit">Delete event</button>
                    <a href="/events/{{$event->id}}/edit" class="btn btn-primary float-right mx-1">Edit this event</a><br>
                </form>
                @endif
            </div>
        </div>
    <div>

@endsection
