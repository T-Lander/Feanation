<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('user')->orderBy('date', 'DESC')->paginate(10);
        $highlighted = Event::where('highlight', '=', true)->first();

        return view('pages.events.index')->with(['events' => $events, 'highlighted' => $highlighted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Create Event
        $event = new Event;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->user_id = auth()->user()->id;
        $event->highlight = false;
        $event->save();

        return redirect('/events')->with('success', 'Event has been made.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('pages.events.show')->with('event', $event);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('pages.events.edit')->with('event', $event); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $request->validate([
        'date' => 'required',
        'title' => 'required',
        'description' => 'required',
        ]);
        
        // Create Event
        $event = Event::find($id);
        $event->date = $request->input('date');
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->highlighted = 'false';
        $event->save();
        
        return redirect('/events')->with('success', 'Event has been changed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event -> delete();

        return redirect('/events')->with('success', 'Event has been removed.');
    }

    public function highlight($id)
    {
        DB::table('events') -> update(['highlight' => false]);
        Event::where('id', $id) -> update(['highlight' => true]);
        return redirect('/events');
    }
}
