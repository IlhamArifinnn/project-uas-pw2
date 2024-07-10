<?php

namespace App\Http\Controllers\Area;

use App\Http\Controllers\Controller;
use App\Models\Area\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::query()->get();

        return view('admin.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // area model have name address longtitude and latitude
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:255'],
        ]);

        Area::query()->create([
            'name' => $request->name,
            'address' => $request->address,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);

        return redirect()->route('admin.areas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('admin.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:255'],
        ]);

        $area->update([
            'name' => $request->name,
            'address' => $request->address,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);

        return redirect()->route('admin.areas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('admin.areas.index');
    }
}
