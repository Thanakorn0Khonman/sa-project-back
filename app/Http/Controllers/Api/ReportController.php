<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report; // Assuming you have a "Report" model

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
