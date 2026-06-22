@extends('layout.admin.master')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <!-- Loan Requests Card -->
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-3 bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width:52px;height:52px;">
                    <i class="bi bi-people-fill text-primary fs-4"></i>
                </div>
                <div>
                    <p class="text-muted mb-1" style="font-size:0.8rem;">Total Leads</p>
                    <h4 class="fw-bold mb-0">{{ number_format($loan_requests) }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Loan Amount Card -->
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-3 bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width:52px;height:52px;">
                    <i class="bi bi-currency-rupee text-success fs-4"></i>
                </div>
                <div>
                    <p class="text-muted mb-1" style="font-size:0.8rem;">Total Loan Amount</p>
                    <h4 class="fw-bold mb-0">{{ number_format($loan_amount) }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Approved Amount Card -->
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-3 bg-warning bg-opacity-10 d-flex align-items-center justify-content-center" style="width:52px;height:52px;">
                    <i class="bi bi-bank text-warning fs-4"></i>
                </div>
                <div>
                    <p class="text-muted mb-1" style="font-size:0.8rem;">Approved Amount</p>
                    <h4 class="fw-bold mb-0">{{ number_format($a_amount) }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Approval Rate Card -->
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-3 bg-danger bg-opacity-10 d-flex align-items-center justify-content-center" style="width:52px;height:52px;">
                    <i class="bi bi-graph-up-arrow text-danger fs-4"></i>
                </div>
                <div>
                    <p class="text-muted mb-1" style="font-size:0.8rem;">Approval Rate</p>
                    <h4 class="fw-bold mb-0">{{ number_format($per, 1) }}%</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row g-4">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-bottom py-3">
                <h6 class="mb-0 fw-semibold"><i class="bi bi-lightning-fill text-warning me-2"></i>Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('admin.loan_request') }}" class="btn btn-outline-primary w-100 py-3">
                            <i class="bi bi-people d-block fs-4 mb-1"></i>
                            View All Leads
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('admin.loan_request_approved') }}" class="btn btn-outline-success w-100 py-3">
                            <i class="bi bi-check2-circle d-block fs-4 mb-1"></i>
                            Approved Leads
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('admin.export_excel') }}" class="btn btn-outline-secondary w-100 py-3">
                            <i class="bi bi-file-earmark-excel d-block fs-4 mb-1"></i>
                            Export Excel
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('admin.message.create') }}" class="btn btn-outline-info w-100 py-3">
                            <i class="bi bi-chat-dots d-block fs-4 mb-1"></i>
                            Send SMS
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('admin.profile') }}" class="btn btn-outline-dark w-100 py-3">
                            <i class="bi bi-person-gear d-block fs-4 mb-1"></i>
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-bottom py-3">
                <h6 class="mb-0 fw-semibold"><i class="bi bi-pie-chart-fill text-primary me-2"></i>Summary</h6>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted">Pending Leads</span>
                        <span class="badge bg-warning text-dark rounded-pill">{{ $loan_requests - floor($loan_requests * $per / 100) }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted">Approved Leads</span>
                        <span class="badge bg-success rounded-pill">{{ floor($loan_requests * $per / 100) }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted">Avg. Loan Amount</span>
                        <span class="fw-semibold">{{ $loan_requests > 0 ? number_format($loan_amount / $loan_requests) : 0 }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
