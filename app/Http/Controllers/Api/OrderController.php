<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    // Create a new order
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'user_name' => 'required',
            'address' => 'required',
            'total_price' => 'required',
            'payment_receipt' => 'required',
            'shipment_method' => 'required',
            // Add validation rules for other fields
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        // Create a new order
        $order = Order::create($validatedData);

        return response()->json(['message' => 'Order created successfully', 'order' => $order]);
    }

    // Retrieve a specific order by ID
    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json(['order' => $order]);
    }

    // Update an existing order by ID
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'user_name' => 'required',
            'address' => 'required',
            'total_price' => 'required',
            'payment_receipt' => 'required',
            'shipment_method' => 'required',
            // Add validation rules for other fields
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        // Update the order with new data
        $order->update($validatedData);

        return response()->json(['message' => 'Order updated successfully', 'order' => $order]);
    }

    // Delete an order by ID
    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }

    public function index()
    {
        // Retrieve all orders
        $orders = Order::all(); // Assuming you have an Order model

        return response()->json(['orders' => $orders], 200);
    }
}
