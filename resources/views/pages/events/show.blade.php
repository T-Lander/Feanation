@extends('layouts.app')

@section('content')
    
    <h3>{{$event->title}}</h3>

    <hr>
    <p>This event was posted on {{$event->created_at}}.</p><br>

    <a href="/events/{{$event->id}}/edit" class="text-muted">Edit this event {{$event->id}}</a><br>
    <a href="/events" class="text-muted">< Go back</a>

@endsection
