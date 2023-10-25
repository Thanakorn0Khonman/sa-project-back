<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
        public function addToCart(Product $product)
    {
        try {
            auth()->user()->cartProducts()->create([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);

            return response()->json(['message' => 'Product added to cart.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add the product to the cart.'], 500);
        }
    }

    public function removeFromCart(Product $product)
    {
        try {
            auth()->user()->cartProducts()->where('product_id', $product->id)->delete();

            return response()->json(['message' => 'Product removed from cart.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to remove the product from the cart.'], 500);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
