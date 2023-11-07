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
            'shipment_method' => 'required',
            'products' => 'required|array|min:1',
            'payment_receipt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's a file
        ]);

        // Handle the payment receipt file
        $paymentReceiptPath = $request->file('payment_receipt')->store('payment_receipts', 'public'); // Store the file and get the path

        // Create the order
        $order = Order::create([
            'user_id' => $validatedData['user_id'],
            'user_name' => $validatedData['user_name'],
            'address' => $validatedData['address'],
            'total_price' => $validatedData['total_price'],
            'shipment_method' => $validatedData['shipment_method'],
            'payment_receipt' => $paymentReceiptPath, // Store the file path in the database
        ]);

        // Iterate through the products and create OrderProduct records
        foreach ($validatedData['products'] as $productData) {
            $product = json_decode($productData, true); // Decode the JSON data

            // Assuming you have a Product model, you can retrieve the product by ID
            $productModel = Product::find($product['product_id']);

            if ($productModel) {
                // Attach the product to the order with the quantity
                $order->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
            }
        }

        // Deduct product quantities
        $order->deductProductQuantities();

        return response()->json(['message' => 'Order created successfully', 'order' => $order]);
    }


    // Retrieve a specific order by ID
    public function show($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
        return response()->json($order);
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

    public function showSpecific($id)
    {
        $order = Order::find($id);
        $product = $order->products;

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
        return response()->json($order);
    }

    public function updateTrack(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'track_num' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        // Update the order with new data
        $order->update($validatedData);

        return response()->json(['message' => 'Order updated successfully', 'order' => $order]);
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
