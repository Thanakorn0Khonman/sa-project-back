<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    // Create a new order
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'user_name' => 'required',
            'address' => 'required',
            'total_price' => 'required',
            'payment_receipt' => 'required',
            'shipment_method' => 'required',
            'products' => 'required|array|min:1',
        ]);

        // Create the order
        $order = Order::create([
            'user_id' => $validatedData['user_id'],
            'user_name' => $validatedData['user_name'],
            'address' => $validatedData['address'],
            'total_price' => $validatedData['total_price'],
            'payment_receipt' => $validatedData['payment_receipt'],
            'shipment_method' => $validatedData['shipment_method'],
        ]);

        foreach ($validatedData['products'] as $productData) {
            // Attach the product to the order with the quantity
            $order->products()->attach($productData['product_id'], ['quantity' => $productData['quantity']]);
        }

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

    public function update_status(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required|in:Pending,Preparing,Packing,Delivering,CompleteDelivery,ReportPending,RefundPending,ResentPending,Refunding,CompleteRefund', // Add the allowed status values
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        // Update the order's status with the new status
        $order->update(['status' => $validatedData['status']]);

        return response()->json(['message' => 'Order status updated successfully', 'order' => $order]);
    }
}
