@extends('layouts.app')

@section('title', 'Terms & Conditions - Aastha Capital Finance')
@section('meta_description', 'Read the Terms and Conditions of Aastha Capital Finance. Understand your rights and obligations when using our loan services and website.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-600/15 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-purple-300 uppercase tracking-wider mb-4">Legal</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Terms & <span class="gradient-text">Conditions</span></h1>
        <p class="text-gray-400">Last updated: {{ date('F Y') }}</p>
    </div>
</section>

<!-- Content -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card p-8 md:p-12 space-y-8">

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">1. Acceptance of Terms</h2>
                <p class="text-gray-400 leading-relaxed">By accessing and using the Aastha Capital Finance website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use our services.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">2. Services</h2>
                <p class="text-gray-400 leading-relaxed mb-4">Aastha Capital Finance provides the following financial services:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Personal Loans, Business Loans, Car Loans, Education Loans, Unsecured Loans, and Home Loans</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Loan advisory and financial consultation services</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Online loan application processing</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>EMI calculation tools and financial planning resources</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">3. Eligibility</h2>
                <p class="text-gray-400 leading-relaxed">To use our services, you must be at least 18 years of age and a citizen or legal resident of India. You must provide accurate and complete information during the application process. Providing false or misleading information may result in rejection of your application and legal action.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">4. Loan Terms</h2>
                <p class="text-gray-400 leading-relaxed mb-4">Please note the following regarding our loan services:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>All loan approvals are subject to eligibility criteria and document verification</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Interest rates, processing fees, and charges are determined based on individual assessment</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Loan disbursement is subject to satisfactory completion of all requirements</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>EMI payments must be made on time as per the agreed schedule</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-check text-emerald-400 text-sm mt-1"></i>
                        <span>Late payments may attract penalty charges and affect your credit score</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">5. Fees and Charges</h2>
                <p class="text-gray-400 leading-relaxed">Our loans may involve processing fees, prepayment charges, late payment penalties, and other applicable charges. All fees will be clearly communicated before loan disbursement. The complete fee structure will be mentioned in your loan agreement.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">6. User Responsibilities</h2>
                <p class="text-gray-400 leading-relaxed mb-4">As a user of our services, you agree to:</p>
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Provide accurate, current, and complete information</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Not use our services for any unlawful purpose</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Repay the loan amount with interest as per the agreed terms</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Inform us immediately of any change in your contact details or financial status</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-400">
                        <i class="fas fa-circle text-indigo-400 text-xs mt-2"></i>
                        <span>Not attempt to gain unauthorized access to our systems</span>
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">7. Intellectual Property</h2>
                <p class="text-gray-400 leading-relaxed">All content on this website, including text, graphics, logos, icons, images, and software, is the property of Aastha Capital Finance and is protected by intellectual property laws. You may not reproduce, distribute, or create derivative works without our written permission.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">8. Disclaimer</h2>
                <p class="text-gray-400 leading-relaxed">The information on this website is provided for general informational purposes only. While we strive to keep the information up-to-date and correct, we make no warranties about the completeness, reliability, or accuracy of this information. The loan calculator and other tools provide estimates only and should not be considered as final offers.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">9. Limitation of Liability</h2>
                <p class="text-gray-400 leading-relaxed">Aastha Capital Finance shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of our website or services. Our total liability shall not exceed the fees paid by you for the specific service in question.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">10. Governing Law</h2>
                <p class="text-gray-400 leading-relaxed">These Terms and Conditions are governed by and construed in accordance with the laws of India. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts in India.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">11. Changes to Terms</h2>
                <p class="text-gray-400 leading-relaxed">We reserve the right to modify these Terms and Conditions at any time. Changes will be effective immediately upon posting on this page. Your continued use of our services after changes constitutes acceptance of the modified terms.</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-white mb-4">12. Contact Information</h2>
                <p class="text-gray-400 leading-relaxed">For any questions regarding these Terms and Conditions, please contact us:</p>
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
