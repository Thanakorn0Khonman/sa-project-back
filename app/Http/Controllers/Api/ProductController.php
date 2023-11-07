<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get a list of all products
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Get a specific product by ID
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    // Create a new product
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $product = Product::create($validatedData);

        return response()->json(['message' => 'Product created successfully', 'product' => $product]);
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 204);
    }

    public function addQuantity(Request $request, $id)
    {
        // Find the product by its ID
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Validate and get the quantity to add from the request
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Update the product's quantity by adding the provided quantity
        $product->quantity += $validatedData['quantity'];
        $product->save();

        return response()->json(['message' => 'Quantity added successfully', 'product' => $product]);
    }

    public function removeQuantity(Request $request, $id)
    {
        // Find the product by its ID
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Validate and get the quantity to remove from the request
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $product->quantity,
        ]);

        // Update the product's quantity by subtracting the provided quantity
        $product->quantity -= $validatedData['quantity'];
        $product->save();

        return response()->json(['message' => 'Quantity removed successfully', 'product' => $product]);
    }
    
}
