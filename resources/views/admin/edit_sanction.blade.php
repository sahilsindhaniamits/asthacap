@extends('layout.admin.master')

@section('content')
<!-- Page Header -->
<div class="flex items-center justify-between mb-5">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Edit Sanction Letter</h1>
        <p class="text-sm text-gray-400">Update the sanction letter details</p>
    </div>
    <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 px-3 py-2 text-xs font-medium text-gray-500 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>

<!-- Form Card -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <form action="{{ route('admin.update_sanction') }}" method="POST">
        @csrf
        <input type="hidden" name="sanction_id" value="{{ $data['id'] }}">

        <div class="px-6 py-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Sanction Amount</label>
                <input type="text" name="sanctioned_amount" value="{{ $data['sanctioned_amount'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Application Number</label>
                <input type="text" name="lead_token" value="{{ $data['lead_token'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Date</label>
                <input type="date" name="date" value="{{ $data['date'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Applicant Name</label>
                <input type="text" name="applicant_name" value="{{ $data['applicant_name'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Father's Name</label>
                <input type="text" name="father_name" value="{{ $data['father_name'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Phone</label>
                <input type="text" name="mobile" value="{{ $data['mobile'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Loan Type</label>
                <input type="text" name="loan_type" value="{{ $data['loan_type'] ?? '' }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">EMI</label>
                <input type="text" name="emi" value="{{ $data['emi'] ?? $data['emi_amount'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">EMI Amount</label>
                <input type="text" name="emi_amount" value="{{ $data['emi_amount'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Payee Name</label>
                <input type="text" name="payee_name" value="{{ $data['payee_name'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Bank Name</label>
                <input type="text" name="bank_number" value="{{ $data['bank_number'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Account Number</label>
                <input type="text" name="account_number" value="{{ $data['account_number'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">IFSC Code</label>
                <input type="text" name="ifsc" value="{{ $data['ifsc'] }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
            <div>
                <label class="text-xs font-medium text-gray-500 mb-1 block">Account Type</label>
                <input type="text" name="account_type" value="{{ $data['account_type'] }}" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
            </div>
        </div>

        <!-- Submit -->
        <div class="px-6 py-5 bg-gray-50 border-t border-gray-100 flex items-center justify-end gap-3">
            <a href="{{ url()->previous() }}" class="px-4 py-2.5 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">Cancel</a>
            <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm transition-all">
                <i class="fas fa-save mr-2"></i>Update Sanction Letter
            </button>
        </div>
    </form>
</div>

@if(session('success'))
<script>alert('Sanction Letter Updated Successfully!');</script>
@endif
@endsection
