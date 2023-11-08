<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Report; // Assuming you have a "Report" model
use App\Models\User;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return response()->json($reports);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = Report::create($request->all());
        return response()->json($report, 201);
    }

    public function storeById(Request $request, $id)
    {

        $data = $request->validate([
            'reason' => 'required|max: 255', // Validate and get the 'reason' from the request
        ]);

        // Find the order based on your application's logic, e.g., by using a specific parameter or condition
        $order = Order::find($id);

        // Get the authenticated user's ID
        $user_id = $order->user->id;

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Get the telephone from the order's user
        $telephone = $order->user->phone;

        // Create the report with the specified attributes
        $report = Report::create([
            'telephone' => $telephone,
            'reason' => $data['reason'],
            'user_id' => $user_id,
            'order_id' => $order->id,
            // Include other report attributes from the request if needed
        ]);

        return response()->json($report, 201);
    }

    public function storeByIdStaff(Request $request, $id)
    {

        $data = $request->validate([
            'reason' => 'required|max: 255',
            'order_id' => 'required', // Validate and get the 'reason' from the request
        ]);

        // Find the order based on your application's logic, e.g., by using a specific parameter or condition
        $user = User::find($id);

        // Get the authenticated user's ID
        $user_id = $user->id;

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Create the report with the specified attributes
        $report = Report::create([
            'reason' => $data['reason'],
            'user_id' => $user_id,
            'order_id' => $data['order_id'],
            // Include other report attributes from the request if needed
        ]);

        return response()->json($report, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Report::find($id);
        if (!$report) {
            return response()->json(['message' => 'Report not found'], 404);
        }
        return response()->json($report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Report::find($id);
        if (!$report) {
            return response()->json(['message' => 'Report not found'], 404);
        }

        $report->update($request->all());
        return response()->json($report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::find($id);
        if (!$report) {
            return response()->json(['message' => 'Report not found'], 404);
        }

        $report->delete();
        return response()->json(['message' => 'Report deleted']);
    }
}
