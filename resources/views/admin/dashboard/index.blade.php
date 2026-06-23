@extends('layout.admin.master')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
    <!-- Loan Requests -->
    <div class="stat-card bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center">
                <i class="fas fa-file-alt text-blue-500"></i>
            </div>
            <span class="text-xs font-medium text-blue-500 bg-blue-50 px-2 py-1 rounded-full">Total</span>
        </div>
        <p class="text-2xl font-bold text-gray-800">{{ $loan_requests }}</p>
        <p class="text-xs text-gray-400 mt-1">Loan Requests</p>
    </div>

    <!-- Loan Amount -->
    <div class="stat-card bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-50 flex items-center justify-center">
                <i class="fas fa-indian-rupee-sign text-emerald-500"></i>
            </div>
            <span class="text-xs font-medium text-emerald-500 bg-emerald-50 px-2 py-1 rounded-full">Amount</span>
        </div>
        <p class="text-2xl font-bold text-gray-800">&#8377;{{ number_format($loan_amount) }}</p>
        <p class="text-xs text-gray-400 mt-1">Total Loan Amount</p>
    </div>

    <!-- Approved Amount -->
    <div class="stat-card bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-amber-50 flex items-center justify-center">
                <i class="fas fa-check-double text-amber-500"></i>
            </div>
            <span class="text-xs font-medium text-amber-500 bg-amber-50 px-2 py-1 rounded-full">Approved</span>
        </div>
        <p class="text-2xl font-bold text-gray-800">&#8377;{{ number_format($a_amount) }}</p>
        <p class="text-xs text-gray-400 mt-1">Approved Loan Amount</p>
    </div>

    <!-- Approval % -->
    <div class="stat-card bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center">
                <i class="fas fa-percentage text-purple-500"></i>
            </div>
            <span class="text-xs font-medium text-purple-500 bg-purple-50 px-2 py-1 rounded-full">Rate</span>
        </div>
        <p class="text-2xl font-bold text-gray-800">{{ $per }}%</p>
        <p class="text-xs text-gray-400 mt-1">Approval Rate</p>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-xl border border-gray-100 p-5 shadow-sm">
    <h3 class="text-sm font-semibold text-gray-700 mb-4">Quick Actions</h3>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
        <a href="{{ route('admin.loan_request') }}" class="flex flex-col items-center gap-2 p-4 rounded-lg bg-blue-50 hover:bg-blue-100 transition-colors group">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fas fa-list text-white text-sm"></i>
            </div>
            <span class="text-xs font-medium text-gray-600">All Leads</span>
        </a>
        <a href="{{ route('admin.loan_request_approved') }}" class="flex flex-col items-center gap-2 p-4 rounded-lg bg-emerald-50 hover:bg-emerald-100 transition-colors group">
            <div class="w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fas fa-check text-white text-sm"></i>
            </div>
            <span class="text-xs font-medium text-gray-600">Approved</span>
        </a>
        <a href="{{ route('admin.message.create') }}" class="flex flex-col items-center gap-2 p-4 rounded-lg bg-purple-50 hover:bg-purple-100 transition-colors group">
            <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fas fa-sms text-white text-sm"></i>
            </div>
            <span class="text-xs font-medium text-gray-600">Send SMS</span>
        </a>
        <a href="{{ route('admin.profile') }}" class="flex flex-col items-center gap-2 p-4 rounded-lg bg-amber-50 hover:bg-amber-100 transition-colors group">
            <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                <i class="fas fa-cog text-white text-sm"></i>
            </div>
            <span class="text-xs font-medium text-gray-600">Settings</span>
        </a>
    </div>
</div>
@endsection
