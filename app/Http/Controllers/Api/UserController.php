<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Retrieve the authenticated user's data
    public function getUserData(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    // Retrieve a specific user's data by their ID
    public function show($id)
    {
        $user = User::find($id);
        $order = $user->orders;

        if ($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    // Add more user-related API methods as needed

    // For example, to list all users:
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // To create a new user:
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            // Add other validation rules for user creation
        ]);

        $user = User::create($data);
        return response()->json($user, 201); // 201 Created status code
    }

    // To update a user's data by ID:
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $data = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'address' => 'required|string|max:255', // Add validation rules for address
            'bank' => 'required|string|max:255', // Add validation rules for bank
            'bank_number' => 'required|string|max:20', // Add validation rules for bank number
            // Add validation rules for other fields as needed
        ]);

        $user->update($data);

        return response()->json($user);
    }

    // To delete a user by ID:
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted'], 200);
    }

    public function getUserOrders($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Use the relationship defined in the User model (e.g., orders) to retrieve orders
        $orders = $user->orders;

        return response()->json($orders);
    }
}
