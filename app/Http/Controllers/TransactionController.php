<?php

namespace App\Http\Controllers;

use App\Models\Area\Area;
use App\Models\Transaction;
use App\Models\Vehicle\Vehicle;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::query()->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = Vehicle::get();
        $areas = Area::get();

        return view('admin.transactions.create', compact('vehicles', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => ['required', 'exists:vehicles,id'],
            'parking_area_id' => ['required', 'exists:area_parkings,id'],
            'date_in' => ['required', 'date'],
            'date_out' => ['required', 'date'],
            'desc' => ['nullable', 'string', 'max:255'],
            'cost' => ['required', 'integer'],
        ]);

        Transaction::query()->create([
            'vehicle_id' => $request->vehicle_id,
            'parking_area_id' => $request->parking_area_id,
            'date_in' => $request->date_in,
            'date_out' => $request->date_out,
            'desc' => $request->desc,
            'cost' => $request->cost,
        ]);

        return redirect()->route('admin.transactions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('admin.transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'vehicle_id' => ['required', 'exists:vehicles,id'],
            'parking_area_id' => ['required', 'exists:area_parkings,id'],
            'date_in' => ['required', 'date'],
            'date_out' => ['required', 'date'],
            'desc' => ['nullable', 'string', 'max:255'],
            'cost' => ['required', 'integer'],
        ]);

        $transaction->update([
            'vehicle_id' => $request->vehicle_id,
            'parking_area_id' => $request->parking_area_id,
            'date_in' => $request->date_in,
            'date_out' => $request->date_out,
            'desc' => $request->desc,
            'cost' => $request->cost,
        ]);

        return redirect()->route('admin.transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('admin.transactions.index');
    }
}
