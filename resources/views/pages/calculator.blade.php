@extends('layouts.app')

@section('title', 'Loan EMI Calculator - Aastha Capital Finance')
@section('meta_description', 'Calculate your monthly EMI for Personal Loan, Business Loan, Home Loan, Car Loan and more. Free online EMI calculator by Aastha Capital Finance.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-amber-300 uppercase tracking-wider mb-4">Financial Tool</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Loan EMI <span class="gradient-text">Calculator</span></h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">Plan your finances better. Calculate your monthly EMI, total interest, and total payment amount instantly.</p>
    </div>
</section>

<!-- Calculator Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10">

            <!-- Calculator Input -->
            <div class="glass-card p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-cyan-500"></div>
                <h2 class="text-2xl font-bold text-white mb-8">Enter Loan Details</h2>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Loan Amount (₹)</label>
                        <input type="number" id="loanAmount" placeholder="Enter loan amount"
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Interest Rate (% per annum)</label>
                        <input type="number" id="interestRate" placeholder="Enter interest rate"
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Loan Tenure</label>
                        <div class="flex gap-3">
                            <input type="number" id="loanTenure" placeholder="Enter tenure"
                                class="flex-1 px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all">
                            <select id="tenureOption"
                                class="px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:outline-none">
                                <option value="months" class="bg-slate-800">Months</option>
                                <option value="years" class="bg-slate-800">Years</option>
                            </select>
                        </div>
                    </div>

                    <button onclick="calculateEMI()" class="btn-primary w-full text-center cursor-pointer">
                        <i class="fas fa-calculator mr-2"></i> Calculate EMI
                    </button>
                </div>
            </div>

            <!-- Results Panel -->
            <div class="space-y-6">
                <div class="glass-card p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-cyan-500"></div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-6">Your EMI Breakdown</h3>

                    <!-- Monthly EMI -->
                    <div class="text-center mb-8">
                        <p class="text-gray-400 text-sm mb-2">Monthly EMI</p>
                        <p id="emiAmount" class="text-4xl md:text-5xl font-bold gradient-text">₹ 0.00</p>
                    </div>

                    <!-- Breakdown Cards -->
                    <div class="grid grid-cols-1 gap-4 mb-6">
                        <div class="glass p-4 rounded-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-indigo-500"></div>
                                <span class="text-gray-400 text-sm">Principal Amount</span>
                            </div>
                            <span id="principalDisplay" class="text-white font-bold">₹ 0</span>
                        </div>
                        <div class="glass p-4 rounded-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-cyan-500"></div>
                                <span class="text-gray-400 text-sm">Total Interest</span>
                            </div>
                            <span id="interestPayable" class="text-white font-bold">₹ 0</span>
                        </div>
                        <div class="glass p-4 rounded-xl flex items-center justify-between border border-indigo-500/30">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                <span class="text-white text-sm font-medium">Total Payment</span>
                            </div>
                            <span id="totalPayment" class="text-white font-bold text-lg">₹ 0</span>
                        </div>
                    </div>

                    <!-- Visual Bar -->
                    <div class="mb-2">
                        <div class="w-full h-4 rounded-full bg-white/5 overflow-hidden flex">
                            <div id="principalBar" class="h-full bg-gradient-to-r from-indigo-500 to-indigo-600 transition-all duration-500" style="width: 50%"></div>
                            <div id="interestBar" class="h-full bg-gradient-to-r from-cyan-500 to-cyan-600 transition-all duration-500" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500">
                        <span>Principal (<span id="principalPct">50</span>%)</span>
                        <span>Interest (<span id="interestPct">50</span>%)</span>
                    </div>
                </div>

                <!-- Apply CTA -->
                <div class="glass-card p-6 text-center">
                    <p class="text-gray-400 text-sm mb-4">Like the calculation? Apply for your loan now!</p>
                    <button @click="$dispatch('open-lead-form')" class="btn-primary cursor-pointer">
                        Apply Now <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How EMI is Calculated -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4">How EMI is <span class="gradient-text">Calculated</span></h2>
        </div>

        <div class="glass-card p-8">
            <div class="text-center mb-8">
                <p class="text-gray-400 text-sm mb-4">EMI Formula:</p>
                <div class="glass inline-block px-8 py-4 rounded-2xl">
                    <p class="text-white font-mono text-lg">EMI = P x R x (1+R)<sup>N</sup> / [(1+R)<sup>N</sup> - 1]</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-1 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">P</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Principal</h4>
                    <p class="text-gray-400 text-sm">The loan amount you borrow.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-2 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">R</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Rate of Interest</h4>
                    <p class="text-gray-400 text-sm">Monthly rate (annual rate / 12 / 100).</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-5 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">N</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Number of EMIs</h4>
                    <p class="text-gray-400 text-sm">Total monthly installments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function calculateEMI() {
    const principalAmount = parseFloat(document.getElementById('loanAmount').value);
    const interestRate = parseFloat(document.getElementById('interestRate').value);
    const loanTenure = parseFloat(document.getElementById('loanTenure').value);
    const tenureOption = document.getElementById('tenureOption').value;

    if (isNaN(principalAmount) || isNaN(interestRate) || isNaN(loanTenure) ||
        principalAmount <= 0 || interestRate <= 0 || loanTenure <= 0) {
        alert('Please enter valid values.');
        return;
    }

    const monthlyRate = interestRate / 100 / 12;
    const tenureMonths = tenureOption === 'months' ? loanTenure : loanTenure * 12;

    const emi = principalAmount * monthlyRate * Math.pow(1 + monthlyRate, tenureMonths) /
                (Math.pow(1 + monthlyRate, tenureMonths) - 1);

    const totalPayment = emi * tenureMonths;
    const interestPayable = totalPayment - principalAmount;

    const principalPercentage = (principalAmount / totalPayment) * 100;
    const interestPercentage = (interestPayable / totalPayment) * 100;

    document.getElementById('emiAmount').textContent = '₹ ' + emi.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    document.getElementById('principalDisplay').textContent = '₹ ' + principalAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    document.getElementById('interestPayable').textContent = '₹ ' + interestPayable.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    document.getElementById('totalPayment').textContent = '₹ ' + totalPayment.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    document.getElementById('principalBar').style.width = principalPercentage.toFixed(0) + '%';
    document.getElementById('interestBar').style.width = interestPercentage.toFixed(0) + '%';
    document.getElementById('principalPct').textContent = principalPercentage.toFixed(0);
    document.getElementById('interestPct').textContent = interestPercentage.toFixed(0);
}
</script>
@endpush
