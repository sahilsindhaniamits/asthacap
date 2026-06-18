{{-- Reusable Loan Detail Content Partial --}}

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 right-10 w-72 h-72 {{ $gradientClass }}/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold {{ $accentTextClass }} uppercase tracking-wider mb-4">{{ $loanCategory }}</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ $loanTitle }}</h1>
                <p class="text-lg text-gray-400 mb-8">{{ $loanDescription }}</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="btn-primary text-center">
                        Apply Now <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="{{ route('calculator') }}" class="btn-secondary text-center">
                        <i class="fas fa-calculator mr-2"></i> Calculate EMI
                    </a>
                </div>
            </div>

            <!-- Loan Quick Info Card -->
            <div class="glass-card p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 {{ $gradientBgClass }}"></div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-2xl {{ $gradientCardClass }} flex items-center justify-center shadow-lg">
                        <i class="{{ $iconClass }} text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg">{{ $loanTitle }}</h3>
                        <p class="text-gray-400 text-sm">Quick Overview</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="glass p-4 rounded-xl">
                        <p class="text-gray-400 text-xs mb-1">Loan Amount</p>
                        <p class="text-white font-bold">{{ $loanAmount }}</p>
                    </div>
                    <div class="glass p-4 rounded-xl">
                        <p class="text-gray-400 text-xs mb-1">Interest Rate</p>
                        <p class="text-white font-bold">{{ $interestRate }}</p>
                    </div>
                    <div class="glass p-4 rounded-xl">
                        <p class="text-gray-400 text-xs mb-1">Tenure</p>
                        <p class="text-white font-bold">{{ $tenure }}</p>
                    </div>
                    <div class="glass p-4 rounded-xl">
                        <p class="text-gray-400 text-xs mb-1">Processing</p>
                        <p class="text-white font-bold">{{ $processing }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Key <span class="gradient-text">Features</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">What makes our {{ $loanTitle }} stand out from the rest.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($features as $feature)
            <div class="glass-card p-6 group">
                <div class="w-12 h-12 rounded-xl {{ $gradientCardClass }} flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="{{ $feature['icon'] }} text-white"></i>
                </div>
                <h4 class="text-white font-semibold mb-2">{{ $feature['title'] }}</h4>
                <p class="text-gray-400 text-sm">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Eligibility & Documents -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Eligibility -->
            <div class="glass-card p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-cyan-500"></div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                        <i class="fas fa-user-check text-emerald-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Eligibility Criteria</h3>
                </div>
                <ul class="space-y-3">
                    @foreach($eligibility as $item)
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-emerald-400 mt-1 text-sm"></i>
                        <span class="text-gray-400 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Documents Required -->
            <div class="glass-card p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500"></div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/20 flex items-center justify-center">
                        <i class="fas fa-folder-open text-indigo-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Documents Required</h3>
                </div>
                <ul class="space-y-3">
                    @foreach($documents as $item)
                    <li class="flex items-start gap-3">
                        <i class="fas fa-file-alt text-indigo-400 mt-1 text-sm"></i>
                        <span class="text-gray-400 text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>

        <div class="space-y-4" x-data="{ open: null }">
            @foreach($faqs as $index => $faq)
            <div class="glass-card overflow-hidden">
                <button @click="open === {{ $index }} ? open = null : open = {{ $index }}" class="w-full px-6 py-5 flex items-center justify-between text-left cursor-pointer">
                    <span class="text-white font-medium pr-4">{{ $faq['question'] }}</span>
                    <i class="fas fa-chevron-down text-gray-400 transition-transform" :class="open === {{ $index }} ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open === {{ $index }}" x-collapse>
                    <div class="px-6 pb-5 text-gray-400 text-sm leading-relaxed border-t border-white/5 pt-4">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] {{ $gradientClass }}/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Apply for {{ $loanTitle }}?</h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Get started today with a simple application. Our team will guide you through every step.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4">
                Apply Now <i class="fas fa-arrow-right ml-2"></i>
            </a>
            <a href="tel:+919999999999" class="btn-secondary text-lg px-8 py-4">
                <i class="fas fa-phone mr-2"></i> Call Us
            </a>
        </div>
    </div>
</section>
