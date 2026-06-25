@extends('layouts.app')

@section('title', 'Contact Us - Aastha Capital Finance')
@section('meta_description', 'Get in touch with Aastha Capital Finance. Apply for loans, ask questions, or give feedback. We are here to help you.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden" style="padding-top:8rem;padding-bottom:4rem;">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="orb" style="width:250px;height:250px;background:#06b6d4;top:20%;right:10%;"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-info mb-3">Get in Touch</span>
        <h1 class="display-5 fw-bold text-white mb-3">Contact <span class="gradient-text">Us</span></h1>
        <p class="text-muted-custom mx-auto" style="max-width:600px;">Have questions about our loans? Need assistance with your application? Our team is here to help.</p>
    </div>
</section>


<!-- Contact Section -->
<section class="section-padding section-dark">
    <div class="orb" style="width:300px;height:300px;background:#6366f1;bottom:10%;left:0;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-4">
            <!-- Contact Info Cards -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-3">
                    <!-- Phone -->
                    <div class="glass-card p-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box gradient-card-1" style="width:48px;height:48px;">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-white fw-semibold mb-1">Call Us</h6>
                                <a href="tel:+919649596982" class="text-muted-custom small">+91 9649596982</a>
                            </div>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="glass-card p-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box gradient-card-2" style="width:48px;height:48px;">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-white fw-semibold mb-1">Email Us</h6>
                                <a href="mailto:Support@aasthacapitalfinance.com" class="text-muted-custom small">Support@aasthacapitalfinance.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="glass-card p-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box gradient-card-4" style="width:48px;height:48px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-white fw-semibold mb-1">Visit Us</h6>
                                <p class="text-muted-custom small mb-0">Shop no 8, Near Sukharia Circle,<br>SGNR, Rajasthan 335001</p>
                            </div>
                        </div>
                    </div>
                    <!-- Working Hours -->
                    <div class="glass-card p-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box gradient-card-5" style="width:48px;height:48px;">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <div>
                                <h6 class="text-white fw-semibold mb-1">Working Hours</h6>
                                <p class="text-muted-custom small mb-0">Mon - Sat: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <!-- Social -->
                    <div class="glass-card p-4">
                        <h6 class="text-white fw-semibold mb-3">Follow Us</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <h4 class="text-white fw-bold mb-2 mt-2">Send Us a Message</h4>
                    <p class="text-muted-custom small mb-4">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <form action="{{ route('loan_request') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label-glass">Full Name *</label>
                                <input type="text" name="name" class="form-control form-control-glass" placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-glass">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control form-control-glass" placeholder="+91 99999 99999" pattern="[0-9]{10}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-glass">Email Address *</label>
                                <input type="email" name="email" class="form-control form-control-glass" placeholder="your@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-glass">Interested In</label>
                                <select name="loan_type" class="form-select form-select-glass">
                                    <option value="">Select Loan Type</option>
                                    <option value="personal">Personal Loan</option>
                                    <option value="business">Business Loan</option>
                                    <option value="car">Car Loan</option>
                                    <option value="education">Education Loan</option>
                                    <option value="unsecured">Unsecured Loan</option>
                                    <option value="home">Home Loan</option>
                                    <option value="other">Other / General Inquiry</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-glass">Required Loan Amount (Optional)</label>
                                <input type="text" name="loan_amount" class="form-control form-control-glass" placeholder="e.g., 500000">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-glass">State</label>
                                <input type="text" name="state" class="form-control form-control-glass" placeholder="Your State">
                            </div>
                            <div class="col-12">
                                <label class="form-label-glass">Message *</label>
                                <textarea name="message" rows="4" class="form-control form-control-glass" placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-gradient">
                                    Send Message <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
