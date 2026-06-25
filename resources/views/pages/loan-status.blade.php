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
                        <!-- Loan Stage Progress -->
                        <div class="col-12" id="stageProgress" style="display:none;">
                            <div class="glass p-4" style="border-radius:0.75rem;">
                                <small class="text-muted-custom d-block mb-3 text-center">Loan Progress</small>
                                <div class="d-flex justify-content-between align-items-center position-relative" style="padding:0 1rem;">
                                    <div class="position-absolute" style="top:50%;left:2rem;right:2rem;height:3px;background:rgba(255,255,255,0.1);transform:translateY(-50%);z-index:0;"></div>
                                    <div class="position-absolute" id="progressBar" style="top:50%;left:2rem;height:3px;background:linear-gradient(90deg,#6366f1,#06b6d4);transform:translateY(-50%);z-index:1;width:0%;transition:width 0.8s ease;"></div>
                                    <div class="text-center position-relative" style="z-index:2;">
                                        <div class="stage-dot" id="stage1" style="width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 0.5rem;border:2px solid rgba(255,255,255,0.2);"><i class="fas fa-check small text-white" style="display:none;"></i></div>
                                        <small class="text-muted-custom" style="font-size:0.65rem;">Approved</small>
                                    </div>
                                    <div class="text-center position-relative" style="z-index:2;">
                                        <div class="stage-dot" id="stage2" style="width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 0.5rem;border:2px solid rgba(255,255,255,0.2);"><i class="fas fa-check small text-white" style="display:none;"></i></div>
                                        <small class="text-muted-custom" style="font-size:0.65rem;">Agreement</small>
                                    </div>
                                    <div class="text-center position-relative" style="z-index:2;">
                                        <div class="stage-dot" id="stage3" style="width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 0.5rem;border:2px solid rgba(255,255,255,0.2);"><i class="fas fa-check small text-white" style="display:none;"></i></div>
                                        <small class="text-muted-custom" style="font-size:0.65rem;">File Closed</small>
                                    </div>
                                    <div class="text-center position-relative" style="z-index:2;">
                                        <div class="stage-dot" id="stage4" style="width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 0.5rem;border:2px solid rgba(255,255,255,0.2);"><i class="fas fa-check small text-white" style="display:none;"></i></div>
                                        <small class="text-muted-custom" style="font-size:0.65rem;">Insurance</small>
                                    </div>
                                </div>
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
                if (data.loan_status == 1) {
                    statusEl.innerHTML = '<span style="color:#34d399;"><i class="fas fa-check-circle me-2"></i>Approved</span>';
                } else if (data.loan_status == 3) {
                    statusEl.innerHTML = '<span style="color:#f87171;"><i class="fas fa-times-circle me-2"></i>Rejected</span>';
                } else {
                    statusEl.innerHTML = '<span style="color:#fbbf24;"><i class="fas fa-clock me-2"></i>Pending</span>';
                }
                
                // Show progress tracker
                var stage = data.loan_stage || 'pending';
                var stages = ['loan_approved', 'agreement_created', 'file_closed', 'insurance'];
                var stageIndex = stages.indexOf(stage);
                var progressEl = document.getElementById('stageProgress');
                
                if (stageIndex >= 0) {
                    progressEl.style.display = 'block';
                    var progressBar = document.getElementById('progressBar');
                    progressBar.style.width = ((stageIndex + 1) / stages.length * 100) + '%';
                    
                    for (var i = 0; i <= stageIndex; i++) {
                        var dot = document.getElementById('stage' + (i + 1));
                        dot.style.background = 'linear-gradient(135deg, #6366f1, #06b6d4)';
                        dot.style.borderColor = '#6366f1';
                        dot.querySelector('i').style.display = 'block';
                    }
                } else {
                    progressEl.style.display = 'none';
                }
                
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
