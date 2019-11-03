@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Edit event</h3>
            </div>
        
            <div class="card-text">
                <form action="{{ action('EventsController@update', $event->id) }}" method="POST">
        
                    @csrf
                    @method('PUT')
            
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" type="date" name="date" value="{{$event->date}}">
                    </div>
            
                    <div class="form-group">
                        <label for="text">Event name</label>
                        <input class="form-control" type="text" name="title" placeholder="Name" value="{{$event->title}}" >
                    </div>
            
                    <div class="form-group">
                        <label for="text">Event description</label>
                        <textarea class="form-control" name="description" placeholder="Description">{{$event->description}}</textarea>
                    </div>
            
                    <button type="submit" class="btn btn-primary float-right">submit</button>
            
                </form>
            
                <a href="/events" class="text-muted">< Go back</a>
            </div>
        </div>
    <div>
        
@endsection
