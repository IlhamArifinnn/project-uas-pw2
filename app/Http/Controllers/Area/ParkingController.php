<?php

namespace App\Http\Controllers\Area;

use App\Http\Controllers\Controller;
use App\Models\Area\Area;
use App\Models\Area\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkings = Parking::query()->get();

        return view('admin.parkings.index', compact('parkings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::get();

        return view('admin.parkings.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // the parking model need area_id (from area model), name, capacity, desc (nullable)
        $request->validate([
            'area_id' => ['required', 'exists:areas,id'],
            'name' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'integer'],
            'desc' => ['nullable', 'string', 'max:255'],
        ]);

        Parking::query()->create([
            'area_id' => $request->area_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
            'desc' => $request->desc,
        ]);

        return redirect()->route('admin.parkings.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parking $parking)
    {
        $areas = Area::get();

        return view('admin.parkings.edit', compact('parking', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parking $parking)
    {
        $request->validate([
            'area_id' => ['required', 'exists:areas,id'],
            'name' => ['required', 'string', 'max:255'],
            'capacity' => ['required', 'integer'],
            'desc' => ['nullable', 'string', 'max:255'],
        ]);

        $parking->update([
            'area_id' => $request->area_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
            'desc' => $request->desc,
        ]);

        return redirect()->route('admin.parkings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parking $parking)
    {
        $parking->delete();

        return redirect()->route('admin.parkings.index');
    }
}
