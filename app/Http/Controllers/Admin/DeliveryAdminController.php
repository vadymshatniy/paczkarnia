<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delivery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = [Delivery::NEW, Delivery::ACTIVE, Delivery::READY, Delivery::SENT, Delivery::DONE, Delivery::CANCELED];
        $deliveries_query = Delivery::query();
        $deliveries_query = isset($_GET['status']) && $_GET['status'] != NULL
            ? $deliveries_query->where('status', $_GET['status'])
            : $deliveries_query;
        $deliveries = $deliveries_query->orderBy('date')->get();
        return view('admin.deliveries.index', compact('deliveries', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery)
    {
        $statuses = [Delivery::NEW, Delivery::ACTIVE, Delivery::READY, Delivery::SENT, Delivery::DONE, Delivery::CANCELED];
        return view('admin.deliveries.edit', compact('delivery', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery $delivery)
    {
        $delivery->fill($request->all());
        $delivery->status = $request->status;
        $delivery->save();
        return back()->with('success', 'Informacja została zachowana');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
