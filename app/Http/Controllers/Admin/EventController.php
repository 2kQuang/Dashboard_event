<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Event::all();
        if (request()->is('api/*')) {
            return response()->json($items);
        }
        return view('admin.templates.event.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templates.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        $event = new Event();
        $event->name = $validatedData['name'];
        $event->detail = $validatedData['detail'];
        $event->save();

        return redirect()->route('admin.event.index')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Event::find($id);
        return view('admin.templates.event.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);
        $event = Event::findOrFail($id);
        $event->name = $data['name'];
        $event->detail = $data['detail'];
        $event->save();

        if (request()->is('api/*')) {
            return response()->json($event, 200);
        }
        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        if (request()->is('api/*')) {
            return response()->json(['success' => 'Event deleted successfully'], 200);
        }
        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully!');
    }
}
