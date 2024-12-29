<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ClassModel::all();
        if (request()->is('api/*')) {
            return response()->json($items);
        }
        return view('admin.templates.class.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templates.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $class = new ClassModel();
        $class->name = $validatedData['name'];
        $class->save();

        return redirect()->route('admin.class.index')->with('success', 'Class created successfully!');
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
        $item = ClassModel::find($id);
        return view('admin.templates.class.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $item = ClassModel::findOrFail($id);
        $item->name = $data['name'];
        $item->save();

        if (request()->is('api/*')) {
            return response()->json($item, 200);
        }
        return redirect()->route('admin.class.index')->with('success', 'Class updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ClassModel::findOrFail($id);
        $item->delete();

        if (request()->is('api/*')) {
            return response()->json(['success' => 'Class deleted successfully'], 200);
        }
        return redirect()->route('admin.class.index')->with('success', 'Class deleted successfully!');
    }
}
