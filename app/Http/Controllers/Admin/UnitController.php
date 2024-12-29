<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Unit::all();
        if (request()->is('api/*')) {
            return response()->json($items);
        }
        return view('admin.templates.unit.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templates.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $unit = new Unit();
        $unit->name = $validatedData['name'];
        $unit->save();

        return redirect()->route('admin.unit.index')->with('success', 'Unit created successfully!');
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
        $item = Unit::find($id);
        return view('admin.templates.unit.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $item = Unit::findOrFail($id);
        $item->name = $data['name'];
        $item->save();

        if (request()->is('api/*')) {
            return response()->json($item, 200);
        }
        return redirect()->route('admin.unit.index')->with('success', 'Unit updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Unit::findOrFail($id);
        $item->delete();

        if (request()->is('api/*')) {
            return response()->json(['success' => 'Unit deleted successfully'], 200);
        }
        return redirect()->route('admin.unit.index')->with('success', 'Unit deleted successfully!');
    }
}
