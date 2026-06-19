@extends('layouts.app')

@section('title', 'Terms & Conditions - Aastha Capital Finance')
@section('meta_description', 'Read the Terms and Conditions of Aastha Capital Finance. Understand your rights and obligations when using our loan services and website.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden" style="padding-top:8rem;padding-bottom:5rem;">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-info mb-3">Legal</span>
        <h1 class="display-5 fw-bold text-white mb-3">Terms & <span class="gradient-text">Conditions</span></h1>
        <p class="text-muted-custom">Last updated: {{ date('F Y') }}</p>
    </div>
</section>

<!-- Content -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="mx-auto" style="max-width:800px;">
            <div class="glass-card p-4 p-md-5">


                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">1. Acceptance of Terms</h4>
                    <p class="text-muted-custom">By accessing and using the Aastha Capital Finance website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use our services.</p>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">2. Services</h4>
                    <p class="text-muted-custom mb-3">Aastha Capital Finance provides the following financial services:</p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Personal Loans, Business Loans, Car Loans, Education Loans, Unsecured Loans, and Home Loans</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Loan advisory and financial consultation services</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Online loan application processing</span></li>
                        <li class="d-flex align-items-start gap-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">EMI calculation tools and financial planning resources</span></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">3. Eligibility</h4>
                    <p class="text-muted-custom">To use our services, you must be at least 18 years of age and a citizen or legal resident of India. You must provide accurate and complete information during the application process. Providing false or misleading information may result in rejection of your application and legal action.</p>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">4. Loan Terms</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-check text-success mt-1 small"></i><span class="text-muted-custom">All loan approvals are subject to eligibility criteria and document verification</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-check text-success mt-1 small"></i><span class="text-muted-custom">Interest rates, processing fees, and charges are determined based on individual assessment</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-check text-success mt-1 small"></i><span class="text-muted-custom">Loan disbursement is subject to satisfactory completion of all requirements</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-check text-success mt-1 small"></i><span class="text-muted-custom">EMI payments must be made on time as per the agreed schedule</span></li>
                        <li class="d-flex align-items-start gap-2"><i class="fas fa-check text-success mt-1 small"></i><span class="text-muted-custom">Late payments may attract penalty charges and affect your credit score</span></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">5. Fees and Charges</h4>
                    <p class="text-muted-custom">Our loans may involve processing fees, prepayment charges, late payment penalties, and other applicable charges. All fees will be clearly communicated before loan disbursement. The complete fee structure will be mentioned in your loan agreement.</p>
                </div>


                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">6. User Responsibilities</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Provide accurate, current, and complete information</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Not use our services for any unlawful purpose</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Repay the loan amount with interest as per the agreed terms</span></li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Inform us immediately of any change in your contact details or financial status</span></li>
                        <li class="d-flex align-items-start gap-2"><i class="fas fa-circle small mt-2" style="color:#818cf8;font-size:6px;"></i><span class="text-muted-custom">Not attempt to gain unauthorized access to our systems</span></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">7. Intellectual Property</h4>
                    <p class="text-muted-custom">All content on this website, including text, graphics, logos, icons, images, and software, is the property of Aastha Capital Finance and is protected by intellectual property laws. You may not reproduce, distribute, or create derivative works without our written permission.</p>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">8. Disclaimer</h4>
                    <p class="text-muted-custom">The information on this website is provided for general informational purposes only. While we strive to keep the information up-to-date and correct, we make no warranties about the completeness, reliability, or accuracy of this information. The loan calculator and other tools provide estimates only and should not be considered as final offers.</p>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">9. Limitation of Liability</h4>
                    <p class="text-muted-custom">Aastha Capital Finance shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of our website or services. Our total liability shall not exceed the fees paid by you for the specific service in question.</p>
                </div>

                <div class="mb-5">
                    <h4 class="text-white fw-bold mb-3">10. Governing Law</h4>
                    <p class="text-muted-custom">These Terms and Conditions are governed by and construed in accordance with the laws of India. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts in India.</p>
                </div>

                <div>
                    <h4 class="text-white fw-bold mb-3">11. Contact Information</h4>
                    <p class="text-muted-custom mb-3">For any questions regarding these Terms and Conditions, please contact us:</p>
                    <div class="glass p-3">
                        <p class="text-white fw-semibold mb-1">Aastha Capital Finance</p>
                        <p class="text-muted-custom small mb-1">Email: <a href="mailto:info@aasthacapital.com" style="color:#818cf8;">info@aasthacapital.com</a></p>
                        <p class="text-muted-custom small mb-0">Phone: <a href="tel:+919999999999" style="color:#818cf8;">+91 99999 99999</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
