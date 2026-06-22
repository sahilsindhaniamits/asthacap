@extends('layout.admin.master')

@section('title', 'Edit Sanction Letter')
@section('page-title', 'Edit Sanction Letter')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex align-items-center">
                <i class="bi bi-pencil-square text-warning fs-4 me-2"></i>
                <h5 class="mb-0 fw-semibold">Edit Sanction Letter</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('admin.create.sanction_letter') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <!-- Sanction Amount -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Sanction Amount</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">&#8377;</span>
                                <input type="text" class="form-control" name="sanctioned_amount" value="{{ $data['sanctioned_amount'] }}">
                            </div>
                        </div>

                        <!-- Application Number -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Application Number</label>
                            <input type="text" class="form-control" name="lead_token" value="{{ $data['lead_token'] }}">
                        </div>

                        <!-- Date -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Date</label>
                            <input type="date" class="form-control" name="date" value="{{ $data['date'] }}">
                        </div>

                        <!-- Applicant Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Applicant Name</label>
                            <input type="text" class="form-control" name="applicant_name" value="{{ $data['applicant_name'] }}">
                        </div>

                        <!-- Father Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Father's Name</label>
                            <input type="text" class="form-control" name="father_name" value="{{ $data['father_name'] }}">
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">+91</span>
                                <input type="text" class="form-control" name="mobile" value="{{ $data['mobile'] }}">
                            </div>
                        </div>

                        <!-- Loan Type -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Loan Type</label>
                            <input type="text" class="form-control" name="loan_type" value="{{ $data['loan_type'] }}">
                        </div>

                        <!-- EMI -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">EMI</label>
                            <input type="text" class="form-control" name="emi" value="{{ $data['emi_amount'] }}">
                        </div>

                        <!-- EMI Amount -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">EMI Amount</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">&#8377;</span>
                                <input type="text" class="form-control" name="emi_amount" value="{{ $data['emi_amount'] }}">
                            </div>
                        </div>

                        <!-- Payee Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Payee Name</label>
                            <input type="text" class="form-control" name="payee_name" value="{{ $data['payee_name'] }}">
                        </div>
                    </div>

                    <!-- Bank Details Section -->
                    <hr class="my-4">
                    <h6 class="fw-semibold text-muted mb-3"><i class="bi bi-bank me-2"></i>Bank Details</h6>

                    <div class="row g-3">
                        <!-- Bank Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Bank Name</label>
                            <input type="text" class="form-control" name="bank_number" value="{{ $data['bank_number'] }}">
                        </div>

                        <!-- Account Number -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Account Number</label>
                            <input type="text" class="form-control" name="account_number" value="{{ $data['account_number'] }}">
                        </div>

                        <!-- IFSC -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">IFSC Code</label>
                            <input type="text" class="form-control" name="ifsc" value="{{ $data['ifsc'] }}">
                        </div>

                        <!-- Account Type -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Account Type</label>
                            <input type="text" class="form-control" name="account_type" value="{{ $data['account_type'] }}" required>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-check-lg me-1"></i>Update Sanction Letter
                        </button>
                        <a href="{{ route('admin.loan_request_approved') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
