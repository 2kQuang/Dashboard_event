<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Role::all();
        if (request()->is('api/*')) {
            return response()->json($items);
        }
        return view('admin.templates.role.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.templates.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = new Role();
        $user->name = $validatedData['name'];
        $user->save();

        return redirect()->route('admin.role.index')->with('success', 'Role created successfully!');
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
        $item = Role::find($id);
        return view('admin.templates.role.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
        ]);
        $role = Role::findOrFail($id);
        $role->name = $data['name'];
        $role->save();

        if (request()->is('api/*')) {
            return response()->json($role, 200);
        }
        return redirect()->route('admin.role.index')->with('success', 'Role updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        if (request()->is('api/*')) {
            return response()->json(['success' => 'Role deleted successfully'], 200);
        }
        return redirect()->route('admin.role.index')->with('success', 'Role deleted successfully!');
    }
}
