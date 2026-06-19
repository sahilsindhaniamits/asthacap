<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'loan_type' => 'required|string|max:255',
        ]);

        DB::table('loan_requests')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'loan_type' => $request->loan_type,
            'loan_amount' => $request->amount,
            'state' => $request->state,
            'aadhar_number' => $request->aadhaar,
            'message' => $request->message,
            'status' => 0,
            'lead_token' => Str::random(32),
            'ip_address' => $request->ip(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Request submitted successfully!']);
    }
}
