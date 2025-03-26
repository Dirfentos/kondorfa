<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Összes esemény listázása
    public function index()
    {
        return response()->json(Event::all());
    }

    // Új esemény mentése
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'event_date' => 'required|date',
        ]);

        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    // Egy adott esemény lekérdezése
    public function show(Event $event)
    {
        return response()->json($event);
    }

    // Esemény frissítése
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        return response()->json($event);
    }

    // Esemény törlése
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->noContent();
    }

    public function getEventsByMonth($year, $month)
{
    $events = Event::whereYear('event_date', $year)
                   ->whereMonth('event_date', $month)
                   ->get();

    return response()->json($events);
}
    
}
