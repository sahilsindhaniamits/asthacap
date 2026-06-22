@extends('layout.admin.master')

@section('title', 'Create Sanction Letter')
@section('page-title', 'Create Sanction Letter')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex align-items-center">
                <i class="bi bi-file-earmark-text text-primary fs-4 me-2"></i>
                <h5 class="mb-0 fw-semibold">Create Sanction Letter</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('admin.create.sanction_letter') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <!-- Sanction Amount -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Sanction Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">&#8377;</span>
                                <input type="text" class="form-control" name="sanctioned_amount" placeholder="Enter sanctioned amount" value="{{ $data['sanctionamt'] }}" required>
                            </div>
                        </div>

                        <!-- Application Number -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Application Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="lead_token" placeholder="Application Number" value="{{ $data['appno'] }}" required>
                        </div>

                        <!-- Date -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d') }}" required>
                        </div>

                        <!-- Applicant Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Applicant Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="applicant_name" placeholder="Applicant Name" value="{{ $data['name'] }}" required>
                        </div>

                        <!-- Father Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Father's Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="father_name" placeholder="Father's Name" required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Phone <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">+91</span>
                                <input type="text" class="form-control" name="mobile" placeholder="Phone number" value="{{ $data['phone'] }}" required>
                            </div>
                        </div>

                        <!-- Loan Type -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Loan Type <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="loan_type" placeholder="Loan Type" value="{{ $data['loan_type'] }}" required>
                        </div>

                        <!-- EMI -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">EMI <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="emi" placeholder="Number of EMIs" value="{{ $data['emiamt'] }}" required>
                        </div>

                        <!-- EMI Amount -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">EMI Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">&#8377;</span>
                                <input type="text" class="form-control" name="emi_amount" placeholder="EMI Amount" value="{{ $data['emiamt'] }}" required>
                            </div>
                        </div>

                        <!-- Payee Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Payee Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="payee_name" placeholder="Payee Name" required>
                        </div>
                    </div>

                    <!-- Bank Details Section -->
                    <hr class="my-4">
                    <h6 class="fw-semibold text-muted mb-3"><i class="bi bi-bank me-2"></i>Bank Details</h6>

                    <div class="row g-3">
                        <!-- Bank Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Bank Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="bank_number" placeholder="Bank Name" required>
                        </div>

                        <!-- Account Number -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Account Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="account_number" placeholder="Account Number" required>
                        </div>

                        <!-- IFSC -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">IFSC Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" required>
                        </div>

                        <!-- Account Type -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Account Type <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="account_type" placeholder="Savings / Current" required>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-check-lg me-1"></i>Create Sanction Letter
                        </button>
                        <a href="{{ route('admin.loan_request_approved') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<script>alert('{{ session("success") }}');</script>
@endif
@endsection
