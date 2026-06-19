@extends('layouts.app')

@section('title', 'Loan EMI Calculator - Aastha Capital Finance')
@section('meta_description', 'Calculate your monthly EMI for Personal Loan, Business Loan, Home Loan, Car Loan and more. Free online EMI calculator by Aastha Capital Finance.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden page-header">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="orb" style="width:250px;height:250px;background:#f59e0b;top:20%;left:5%;opacity:0.1;"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-warning mb-3">Financial Tool</span>
        <h1 class="display-5 fw-bold text-white mb-3">Loan EMI <span class="gradient-text">Calculator</span></h1>
        <p class="text-muted-custom mx-auto" style="max-width:600px;">Calculate your monthly EMI easily and plan your loan better</p>
    </div>
</section>

<!-- Calculator Section (same as homepage) -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-4 align-items-stretch">
            <!-- EMI Input Form -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">Enter Loan Details</h5>

                    <label class="form-label-glass">Loan Amount</label>
                    <input type="number" id="loanAmount" class="form-control form-control-glass mb-3" placeholder="Enter loan amount">

                    <label class="form-label-glass">Interest Rate (%)</label>
                    <input type="number" id="interestRate" class="form-control form-control-glass mb-3" placeholder="Enter interest rate" step="0.1">

                    <label class="form-label-glass">Loan Tenure</label>
                    <div class="input-group mb-3">
                        <input type="number" id="loanTenure" class="form-control form-control-glass" placeholder="Enter tenure">
                        <select id="tenureOption" class="form-select form-select-glass" style="max-width:120px;">
                            <option value="months">Months</option>
                            <option value="years">Years</option>
                        </select>
                    </div>

                    <button class="btn-gradient w-100" onclick="calculateEMI()">
                        Calculate EMI <i class="fas fa-calculator ms-2"></i>
                    </button>
                </div>
            </div>

            <!-- EMI Details -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-emerald"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">EMI Details</h5>
                    <div class="mb-3">
                        <div class="glass p-3 mb-2" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Monthly EMI</small>
                            <span class="text-white fw-bold fs-5" id="emiAmount">&mdash;</span>
                        </div>
                        <div class="glass p-3 mb-2" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Interest Payable</small>
                            <span class="text-white fw-bold fs-5" id="interestPayable">&mdash;</span>
                        </div>
                        <div class="glass p-3" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Total Payment</small>
                            <span class="text-white fw-bold fs-5" id="totalPayment">&mdash;</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-outline-glass w-100 text-center d-block small py-2">
                        Apply for Loan <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- EMI Chart -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-cyan"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">Payment Breakup</h5>
                    <div class="d-flex justify-content-center align-items-center" style="min-height:220px;">
                        <canvas id="emiChart" width="220" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.3);"></div>
    <div class="container position-relative text-center" style="z-index:5;">
        <h2 class="display-6 fw-bold text-white mb-3">Like What You See? <span class="gradient-text">Apply Now!</span></h2>
        <p class="lead text-muted-custom mb-4 mx-auto" style="max-width:600px;">Our team is ready to help you get the best loan offer. Contact us today.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="{{ route('contact') }}" class="btn-gradient fs-6 px-4 py-3">Apply Now <i class="fas fa-arrow-right ms-2"></i></a>
            <a href="{{ route('loans') }}" class="btn-outline-glass fs-6 px-4 py-3"><i class="fas fa-list me-2"></i> View All Loans</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
let chart;
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('emiChart').getContext('2d');
    chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{ data: [50, 50], backgroundColor: ['#6366f1', '#06b6d4'], borderWidth: 0 }]
        },
        options: {
            responsive: true, maintainAspectRatio: true, cutout: '65%',
            plugins: { legend: { position: 'bottom', labels: { color: '#94a3b8', padding: 15, font: { size: 12 } } } }
        }
    });
});

function calculateEMI() {
    const principal = parseFloat(document.getElementById('loanAmount').value);
    const rate = parseFloat(document.getElementById('interestRate').value);
    const tenure = parseFloat(document.getElementById('loanTenure').value);
    const tenureOpt = document.getElementById('tenureOption').value;

    if (isNaN(principal) || isNaN(rate) || isNaN(tenure) || principal <= 0 || rate <= 0 || tenure <= 0) {
        alert('Please enter valid values.'); return;
    }

    const monthlyRate = rate / 100 / 12;
    const months = tenureOpt === 'months' ? tenure : tenure * 12;
    const emi = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    const totalPayment = emi * months;
    const interestPayable = totalPayment - principal;

    document.getElementById('emiAmount').innerHTML = '\u20B9' + Math.round(emi).toLocaleString('en-IN');
    document.getElementById('interestPayable').innerHTML = '\u20B9' + Math.round(interestPayable).toLocaleString('en-IN');
    document.getElementById('totalPayment').innerHTML = '\u20B9' + Math.round(totalPayment).toLocaleString('en-IN');

    chart.data.datasets[0].data = [((principal / totalPayment) * 100).toFixed(1), ((interestPayable / totalPayment) * 100).toFixed(1)];
    chart.update();
}
</script>
@endpush
