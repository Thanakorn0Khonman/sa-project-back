<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order; // You should import the Order model

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch a list of orders
        $orders = Order::all();

        return response()->json(['orders' => $orders], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|integer',
            'address' => 'required|string',
            'status' => 'required|string',
        ]);

        // Create a new order
        $order = Order::create([
            'user_id' => $request->user_id,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return response()->json(['order' => $order], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find and retrieve a specific order by ID
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json(['order' => $order], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'integer',
            'address' => 'string',
            'status' => 'string',
        ]);

        // Find and retrieve a specific order by ID
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Update the order with the new data
        if ($request->user_id) {
            $order->user_id = $request->user_id;
        }
        if ($request->address) {
            $order->address = $request->address;
        }
        if ($request->status) {
            $order->status = $request->status;
        }
        $order->save();

        return response()->json(['order' => $order], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find and retrieve a specific order by ID
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Delete the order
        $order->delete();

        return response()->json(['message' => 'Order deleted'], 200);
    }
}
