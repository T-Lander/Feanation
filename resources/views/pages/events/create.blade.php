@extends('layouts.app')

@section('content')
    
    <h3>Create a new event</h3>
    <hr>

    <form action="{{action('EventsController@store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="text">Event name</label>
            <input class="form-control" type="text" name="title" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="text">Event description</label>
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary float-right">submit</button>
    </form>

    <a href="/events" class="text-muted">< Go back</a>

@endsection
