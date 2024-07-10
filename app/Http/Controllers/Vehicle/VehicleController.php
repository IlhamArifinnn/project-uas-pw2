<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle\Type;
use App\Models\Vehicle\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::query()->get();

        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::get();

        return view('admin.vehicles.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_type_id' => ['required', 'integer', 'exists:vehicle_types,id'],
            'plate_number' => ['required', 'string', 'max:255'],
            'merk' => ['nullable', 'string', 'max:255'],
            'desc' => ['nullable', 'string', 'max:255'],
        ]);

        Vehicle::query()->create([
            'owner_id' => auth()->id(),
            'vehicle_type_id' => $request->type_id,
            'plate_number' => $request->plate,
            'merk' => $request->merk,
            'desc' => $request->desc,
        ]);

        return redirect()->route('admin.vehicles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        $types = Type::get();

        return view('admin.vehicles.edit', compact('vehicle', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'vehicle_type_id' => ['required', 'integer', 'exists:vehicle_types,id'],
            'plate_number' => ['required', 'string', 'max:255'],
            'merk' => ['nullable', 'string', 'max:255'],
            'desc' => ['nullable', 'string', 'max:255'],
        ]);

        $vehicle->update([
            'vehicle_type_id' => $request->type_id,
            'plate_number' => $request->plate,
            'merk' => $request->merk,
            'desc' => $request->desc,
        ]);

        return redirect()->route('admin.vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('admin.vehicles.index');
    }
}
