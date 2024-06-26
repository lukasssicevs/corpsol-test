<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuditLog;

class AuditLogController extends Controller
{
    public function index(Request $request)
{
    $query = AuditLog::query();

    if ($request->has('from') && $request->has('to')) {
        $query->whereBetween('created_at', [$request->from, $request->to]);
    }

    $logs = $query->latest()->take(10)->get();

    return response()->json($logs);
}
}
