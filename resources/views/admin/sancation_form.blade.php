@extends('layout.admin.master')

@section('style')
<style>
    .sanction-card {
        background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%);
        border: 1px solid rgba(99,102,241,0.2);
        border-radius: 1.5rem;
        overflow: hidden;
    }
    .sanction-header {
        background: linear-gradient(135deg, #6366f1, #06b6d4);
        padding: 1.5rem 2rem;
        position: relative;
    }
    .sanction-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #f59e0b, #6366f1, #06b6d4);
    }
    .sanction-header h4 {
        color: #fff;
        font-weight: 700;
        margin: 0;
        font-size: 1.4rem;
    }
    .sanction-header p {
        color: rgba(255,255,255,0.8);
        margin: 0.25rem 0 0;
        font-size: 0.85rem;
    }
    .sanction-body {
        padding: 2rem;
    }
    .sanction-body .form-label {
        color: #94a3b8;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 0.4rem;
    }
    .sanction-body .form-control {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 0.75rem;
        color: #e2e8f0;
        padding: 0.7rem 1rem;
        transition: all 0.3s ease;
    }
    .sanction-body .form-control:focus {
        background: rgba(255,255,255,0.08);
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99,102,241,0.2);
        color: #fff;
    }
    .sanction-body .form-control::placeholder {
        color: #475569;
    }
    .section-divider {
        border: none;
        border-top: 1px solid rgba(99,102,241,0.15);
        margin: 1.5rem 0;
    }
    .section-title {
        color: #818cf8;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .section-title i {
        color: #06b6d4;
    }
    .btn-sanction-submit {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: #fff;
        border: none;
        border-radius: 9999px;
        padding: 0.75rem 2.5rem;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(99,102,241,0.4);
    }
    .btn-sanction-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(99,102,241,0.6);
        color: #fff;
    }
    .brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 9999px;
        padding: 0.3rem 1rem;
        font-size: 0.75rem;
        color: #06b6d4;
        font-weight: 600;
    }
</style>
@endsection

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="sanction-card w-100">
        <!-- Header -->
        <div class="sanction-header d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h4><i class="fas fa-file-signature me-2"></i>Sanction Letter</h4>
                <p>Generate official loan sanction letter for the applicant</p>
            </div>
            <div class="brand-badge">
                <i class="fas fa-shield-alt"></i> Aastha Capital Finance
            </div>
        </div>

        <!-- Body -->
        <div class="sanction-body">
            <form class="forms-sample" action="{{ route('admin.create.sanction_letter') }}" method="POST">
                @csrf

                <!-- Loan Details Section -->
                <div class="section-title"><i class="fas fa-file-invoice-dollar"></i> Loan Details</div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Sanction Amount</label>
                        <input type="text" class="form-control" name="sanctioned_amount" placeholder="Enter sanctioned amount" value="{{ $data['sanctionamt'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Application Number</label>
                        <input type="text" class="form-control" name="lead_token" placeholder="Enter application number" value="{{ $data['appno'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" value="{{ $data['created_at'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Loan Type</label>
                        <input type="text" class="form-control" name="loan_type" placeholder="Enter loan type" value="{{ $data['loan_type'] }}" required>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- Applicant Details Section -->
                <div class="section-title"><i class="fas fa-user"></i> Applicant Details</div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Applicant Name</label>
                        <input type="text" class="form-control" name="applicant_name" placeholder="Enter applicant name" value="{{ $data['name'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Father's Name</label>
                        <input type="text" class="form-control" name="father_name" placeholder="Enter father's name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter phone number" value="{{ $data['phone'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Payee Name</label>
                        <input type="text" class="form-control" name="payee_name" placeholder="Enter payee name" required>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- EMI Details Section -->
                <div class="section-title"><i class="fas fa-calculator"></i> EMI Details</div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">EMI</label>
                        <input type="text" class="form-control" name="emi" placeholder="Enter EMI" value="{{ $data['emiamt'] }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">EMI Amount</label>
                        <input type="text" class="form-control" name="emi_amount" placeholder="Enter EMI amount" value="{{ $data['emiamt'] }}" required>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- Bank Details Section -->
                <div class="section-title"><i class="fas fa-university"></i> Bank Details</div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Bank Name</label>
                        <input type="text" class="form-control" name="bank_number" placeholder="Enter bank name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Account Number</label>
                        <input type="text" class="form-control" name="account_number" placeholder="Enter account number" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">IFSC Code</label>
                        <input type="text" class="form-control" name="ifsc" placeholder="Enter IFSC code" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Account Type</label>
                        <input type="text" class="form-control" name="account_type" placeholder="Enter account type" required>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- Submit -->
                <div class="d-flex justify-content-between align-items-center pt-2">
                    <a href="{{ url()->previous() }}" class="text-muted text-decoration-none">
                        <i class="fas fa-arrow-left me-1"></i> Back
                    </a>
                    <button type="submit" class="btn-sanction-submit">
                        <i class="fas fa-file-signature me-2"></i>Generate Sanction Letter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('success'))
<script>
    alert('Sanction Letter Created Successfully!');
</script>
@endif
@endsection
