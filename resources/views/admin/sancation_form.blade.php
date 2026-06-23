@extends('layout.admin.master')

@section('content')
<!-- Page Header -->
<div class="flex items-center justify-between mb-5">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Create Sanction Letter</h1>
        <p class="text-sm text-gray-400">Generate official loan sanction letter for the applicant</p>
    </div>
    <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 px-3 py-2 text-xs font-medium text-gray-500 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>

<!-- Form Card -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <form action="{{ route('admin.create_sanction') }}" method="POST">
        @csrf

        <!-- Loan Details -->
        <div class="px-6 py-4 border-b border-gray-50">
            <h3 class="text-sm font-semibold text-primary-600 uppercase tracking-wider flex items-center gap-2">
                <i class="fas fa-file-invoice-dollar"></i> Loan Details
            </h3>
        </div>
        <div class="px-6 py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Sanction Amount</label>
                <input type="text" name="sanctioned_amount" value="{{ $data['sanctionamt'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Enter amount">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Application Number</label>
                <input type="text" name="lead_token" value="{{ $data['appno'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="App number">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Date</label>
                <input type="date" name="date" value="{{ $data['created_at'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Loan Type</label>
                <input type="text" name="loan_type" value="{{ $data['loan_type'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Loan type">
            </div>
        </div>

        <!-- Applicant Details -->
        <div class="px-6 py-4 border-b border-t border-gray-50">
            <h3 class="text-sm font-semibold text-emerald-600 uppercase tracking-wider flex items-center gap-2">
                <i class="fas fa-user"></i> Applicant Details
            </h3>
        </div>
        <div class="px-6 py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Applicant Name</label>
                <input type="text" name="applicant_name" value="{{ $data['name'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Full name">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Father's Name</label>
                <input type="text" name="father_name" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Father's name">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Phone</label>
                <input type="text" name="mobile" value="{{ $data['phone'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Phone number">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Payee Name</label>
                <input type="text" name="payee_name" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Payee name">
            </div>
        </div>

        <!-- EMI Details -->
        <div class="px-6 py-4 border-b border-t border-gray-50">
            <h3 class="text-sm font-semibold text-amber-600 uppercase tracking-wider flex items-center gap-2">
                <i class="fas fa-calculator"></i> EMI Details
            </h3>
        </div>
        <div class="px-6 py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">EMI</label>
                <input type="text" name="emi" value="{{ $data['emiamt'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="EMI">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">EMI Amount</label>
                <input type="text" name="emi_amount" value="{{ $data['emiamt'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="EMI amount">
            </div>
        </div>

        <!-- Bank Details -->
        <div class="px-6 py-4 border-b border-t border-gray-50">
            <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wider flex items-center gap-2">
                <i class="fas fa-university"></i> Bank Details
            </h3>
        </div>
        <div class="px-6 py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Bank Name</label>
                <input type="text" name="bank_number" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Bank name">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Account Number</label>
                <input type="text" name="account_number" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Account number">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">IFSC Code</label>
                <input type="text" name="ifsc" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="IFSC code">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Account Type</label>
                <input type="text" name="account_type" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Account type">
            </div>
        </div>

        <!-- Submit -->
        <div class="px-6 py-5 bg-gray-50 border-t border-gray-100 flex items-center justify-end gap-3">
            <a href="{{ url()->previous() }}" class="px-4 py-2.5 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">Cancel</a>
            <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm transition-all">
                <i class="fas fa-file-signature mr-2"></i>Generate Sanction Letter
            </button>
        </div>
    </form>
</div>

@if(session('success'))
<script>alert('Sanction Letter Created Successfully!');</script>
@endif
@endsection
