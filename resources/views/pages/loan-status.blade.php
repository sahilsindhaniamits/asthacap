@extends('layouts.app')

@section('title', 'Check Loan Status - Aastha Capital Finance')
@section('meta_description', 'Track your loan application status. Enter your application number to check the current status of your loan with Aastha Capital Finance.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden page-header">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-info mb-3">Track Application</span>
        <h1 class="display-5 fw-bold text-white mb-3">Check Loan <span class="gradient-text">Status</span></h1>
        <p class="text-muted-custom mx-auto" style="max-width:600px;">Enter your application number to track your loan status in real-time.</p>
    </div>
</section>

<!-- Loan Status Section -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Search Box -->
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden mb-4">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <div class="text-center mb-4 mt-2">
                        <div class="icon-box gradient-card-2 mx-auto mb-3" style="width:64px;height:64px;">
                            <i class="fas fa-search text-white fs-4"></i>
                        </div>
                        <h4 class="text-white fw-bold">Track Your Application</h4>
                        <p class="text-muted-custom small">Enter your application number (e.g. ACF1234567890) to see your loan status</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" id="appNoInput" class="form-control form-control-glass" placeholder="Enter Application Number" style="border-radius:0.75rem 0 0 0.75rem;">
                                <button class="btn-gradient" id="checkStatusBtn" style="border-radius:0 0.75rem 0.75rem 0;padding:0.75rem 1.5rem;">
                                    Check <i class="fas fa-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Result Card (hidden by default) -->
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden" id="statusResult" style="display:none;">
                    <div class="accent-bar accent-bar-emerald"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2"><i class="fas fa-file-alt me-2" style="color:#818cf8;"></i>Your Loan Details</h5>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="glass p-3" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block">Applicant Name</small>
                                <span class="text-white fw-bold" id="resName">—</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="glass p-3" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block">Phone Number</small>
                                <span class="text-white fw-bold" id="resPhone">—</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="glass p-3" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block">Email</small>
                                <span class="text-white fw-bold" id="resContact">—</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="glass p-3" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block">Loan Amount</small>
                                <span class="text-white fw-bold" id="resAmount">—</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="glass p-3" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block">Loan Type</small>
                                <span class="text-white fw-bold" id="resType">—</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="glass p-3 text-center" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block mb-1">Application Status</small>
                                <span class="fs-5 fw-bold" id="resStatus">—</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.getElementById('checkStatusBtn').addEventListener('click', function() {
    var appno = document.getElementById('appNoInput').value.trim();
    if (!appno) { alert('Please enter your application number'); return; }

    fetch("{{ route('check_status') }}?appno=" + encodeURIComponent(appno))
        .then(r => r.json())
        .then(data => {
            if (data.status) {
                document.getElementById('resName').textContent = data.name || '—';
                document.getElementById('resPhone').textContent = data.phone || '—';
                document.getElementById('resContact').textContent = data.email || '—';
                document.getElementById('resAmount').textContent = data.loan_amount ? '₹' + Number(data.loan_amount).toLocaleString('en-IN') : '—';
                document.getElementById('resType').textContent = data.loan_type || '—';
                var statusEl = document.getElementById('resStatus');
                var stage = data.loan_stage || 'pending';
                var stageLabels = { 'pending': 'Pending', 'loan_approved': 'Loan Approved', 'agreement_created': 'Agreement Created', 'file_closed': 'File Closed', 'insurance': 'Insurance' };
                var stageColors = { 'pending': '#fbbf24', 'loan_approved': '#34d399', 'agreement_created': '#818cf8', 'file_closed': '#06b6d4', 'insurance': '#f472b6' };
                var stageIcons = { 'pending': 'fa-clock', 'loan_approved': 'fa-check-circle', 'agreement_created': 'fa-file-signature', 'file_closed': 'fa-folder-open', 'insurance': 'fa-shield-alt' };
                
                if (data.loan_status == 1 && stage == 'pending') stage = 'loan_approved';
                
                var color = stageColors[stage] || '#fbbf24';
                var label = stageLabels[stage] || 'Pending';
                var icon = stageIcons[stage] || 'fa-clock';
                statusEl.innerHTML = '<span style="color:' + color + ';"><i class="fas ' + icon + ' me-2"></i>' + label + '</span>';
                
                document.getElementById('statusResult').style.display = 'block';
            } else {
                alert(data.message || 'Application not found. Please check your application number.');
                document.getElementById('statusResult').style.display = 'none';
            }
        })
        .catch(function() {
            alert('Application not found. Please check your application number.');
            document.getElementById('statusResult').style.display = 'none';
        });
});

document.getElementById('appNoInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') document.getElementById('checkStatusBtn').click();
});
</script>
@endpush
