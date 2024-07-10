<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::query()->get();

        return view('admin.vehicle-types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehicle-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'desc' => ['nullable', 'string', 'max:255'],
            'price_hour' => ['required', 'integer'],
        ]);

        Type::query()->create([
            'name' => $request->name,
            'desc' => $request->desc,
            'price_hour' => $request->price_hour,
        ]);

        return redirect()->route('admin.vehicle-types.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.vehicle-types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'desc' => ['nullable', 'string', 'max:255'],
            'price_hour' => ['required', 'integer'],
        ]);

        $type->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price_hour' => $request->price_hour,
        ]);

        return redirect()->route('admin.vehicle-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.vehicle-types.index');
    }
}
