<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\DeliveryRequest;
use App\Models\Delivery;
use App\Models\DeliveryProduct;
use App\Models\Product;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('is_active', true)
            ->select('id', 'title')
            ->get();
        return view('delivery', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeliveryRequest $request)
    {
        $products = array_filter($request->products);
        if (count($products)) {
            $item = new Delivery();
            $item->fill($request->except(['_token', '_method']));
            // dd($request->except(['_token', '_method']));

            $item->save();
            foreach ($products as $id => $count) {
                $product = new DeliveryProduct();
                $product->delivery_id = $item->id;
                $product->product_id = $id;
                $product->count = $count;
                $product->save();
            }
            return redirect()->route('delivery.index')->with('success', 'Zamówienie zostało stworzone pomyślnie');
        }
        return back()->withInput()->with('error', 'Products are not chosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
