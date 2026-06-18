@extends('layouts.app')

@section('title', 'Privacy Policy - Aastha Capital Finance')
@section('meta_description', 'Read the Privacy Policy of Aastha Capital Finance. Learn how we collect, use, and protect your personal information.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-indigo-600/15 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-indigo-300 uppercase tracking-wider mb-4">Legal</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Privacy <span class="gradient-text">Policy</span></h1>
        <p class="text-gray-400">Last updated: {{ date('F Y') }}</p>
    </div>
</section>

<!-- Content -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card p-8 md:p-12 space-y-8">

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">1. Introduction</h2>
                <p class="text-gray-400 leading-relaxed">Aastha Capital Finance ("we," "our," or "us") is committed to protecting the privacy of our customers and website visitors. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">2. Information We Collect</h2>
                <p class="text-gray-400 leading-relaxed mb-4">We may collect the following types of information:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span><strong class="text-white">Personal Information:</strong> Name, email address, phone number, date of birth, PAN number, Aadhaar number, address, and employment details.</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span><strong class="text-white">Financial Information:</strong> Income details, bank statements, credit history, existing loan details, and asset information.</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span><strong class="text-white">Technical Information:</strong> IP address, browser type, device information, cookies, and usage data collected automatically when you visit our website.</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span><strong class="text-white">Documents:</strong> Identity proofs, address proofs, income documents, and photographs submitted during loan application.</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">3. How We Use Your Information</h2>
                <p class="text-gray-400 leading-relaxed mb-4">We use the collected information for the following purposes:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Processing and evaluating your loan applications</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Verifying your identity and creditworthiness</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Communicating with you about your applications and services</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Complying with legal and regulatory requirements</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Improving our services and website experience</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Sending promotional offers and updates (with your consent)</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">4. Information Sharing</h2>
                <p class="text-gray-400 leading-relaxed mb-4">We may share your information with:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Partner banks and NBFCs for loan processing</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Credit bureaus for credit assessment</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Government authorities as required by law</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Service providers who assist in our operations</span>
                    </li>
                </ul>
                <p class="text-gray-400 leading-relaxed mt-4">We do not sell your personal information to third parties for marketing purposes.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">5. Data Security</h2>
                <p class="text-gray-400 leading-relaxed">We implement industry-standard security measures to protect your personal information, including encryption, secure servers, firewalls, and access controls. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">6. Cookies</h2>
                <p class="text-gray-400 leading-relaxed">Our website uses cookies to enhance your browsing experience. Cookies help us understand how you use our website and enable certain functionalities. You can control cookie settings through your browser preferences.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">7. Your Rights</h2>
                <p class="text-gray-400 leading-relaxed mb-4">You have the right to:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Access your personal data held by us</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Request correction of inaccurate information</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Withdraw consent for marketing communications</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Request deletion of your data (subject to legal obligations)</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">8. Changes to This Policy</h2>
                <p class="text-gray-400 leading-relaxed">We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. We encourage you to review this policy periodically.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">9. Contact Us</h2>
                <p class="text-gray-400 leading-relaxed">If you have any questions about this Privacy Policy or our data practices, please contact us at:</p>
                <div class="glass p-4 rounded-xl mt-4">
                    <p class="text-white font-semibold">Aastha Capital Finance</p>
                    <p class="text-gray-400 text-sm mt-1">Email: <a href="mailto:info@aasthacapital.com" class="text-indigo-400 hover:underline">info@aasthacapital.com</a></p>
                    <p class="text-gray-400 text-sm">Phone: <a href="tel:+919999999999" class="text-indigo-400 hover:underline">+91 99999 99999</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
