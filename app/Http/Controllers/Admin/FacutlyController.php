<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facutly;
use Illuminate\Http\Request;

class FacutlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Facutly::all();
        if (request()->is('api/*')) {
            return response()->json($items);
        }
        return view('admin.templates.facutly.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templates.facutly.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $facutly = new Facutly();
        $facutly->name = $validatedData['name'];
        $facutly->save();

        return redirect()->route('admin.facutly.index')->with('success', 'Facutly created successfully!');
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
        $item = Facutly::find($id);
        return view('admin.templates.facutly.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $item = Facutly::findOrFail($id);
        $item->name = $data['name'];
        $item->save();

        if (request()->is('api/*')) {
            return response()->json($item, 200);
        }
        return redirect()->route('admin.facutly.index')->with('success', 'Facutly updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Facutly::findOrFail($id);
        $item->delete();

        if (request()->is('api/*')) {
            return response()->json(['success' => 'Facutly deleted successfully'], 200);
        }
        return redirect()->route('admin.facutly.index')->with('success', 'Facutly deleted successfully!');
    }
}
