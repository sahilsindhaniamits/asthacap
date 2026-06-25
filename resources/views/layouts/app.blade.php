<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Aastha Capital Finance - Your trusted partner for Personal Loans, Business Loans, Home Loans, Car Loans, Education Loans and more. Fast approvals, competitive rates.')">
    <meta name="keywords" content="@yield('meta_keywords', 'loans, personal loan, business loan, home loan, car loan, education loan, finance, Aastha Capital')">
    <title>@yield('title', 'Aastha Capital Finance - Trusted Financial Partner')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom Theme CSS -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    <!-- ====== NAVBAR ====== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-glass py-3" id="mainNavbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Aastha Capital Finance" style="height:44px;">
                <div>
                    <span class="text-white fw-bold fs-5">Aastha Capital</span>
                    <span class="fw-light fs-5" style="color:#a5b4fc;"> Finance</span>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('loans*') ? 'active' : '' }}" href="{{ route('loans') }}" id="loansDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Loans
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="loansDropdown">
                            <li><a class="dropdown-item" href="{{ route('loans.personal') }}"><i class="fas fa-user text-primary me-2"></i>Personal Loan</a></li>
                            <li><a class="dropdown-item" href="{{ route('loans.business') }}"><i class="fas fa-briefcase text-info me-2"></i>Business Loan</a></li>
                            <li><a class="dropdown-item" href="{{ route('loans.car') }}"><i class="fas fa-car text-warning me-2"></i>Car Loan</a></li>
                            <li><a class="dropdown-item" href="{{ route('loans.education') }}"><i class="fas fa-graduation-cap text-success me-2"></i>Education Loan</a></li>
                            <li><a class="dropdown-item" href="{{ route('loans.unsecured') }}"><i class="fas fa-shield-alt text-danger me-2"></i>Unsecured Loan</a></li>
                            <li><a class="dropdown-item" href="{{ route('loans.home') }}"><i class="fas fa-home text-warning me-2"></i>Home Loan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('calculator') ? 'active' : '' }}" href="{{ route('calculator') }}">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('loan.status') ? 'active' : '' }}" href="{{ route('loan.status') }}">Loan Status</a>
                    </li>
                </ul>
                <a href="#" class="btn-gradient d-none d-lg-inline-block" style="font-size:0.85rem;padding:0.5rem 1.5rem;" onclick="document.getElementById('loanPopupOverlay').classList.add('show');return false;">
                    Apply Now <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- ====== MAIN CONTENT ====== -->
    <main>
        @yield('content')
    </main>

    <!-- ====== FOOTER ====== -->
    <footer class="footer-dark pt-5 pb-4">
        <!-- Decorative Orbs -->
        <div class="orb" style="width:300px;height:300px;background:#6366f1;top:0;left:10%;"></div>
        <div class="orb" style="width:300px;height:300px;background:#06b6d4;bottom:0;right:10%;"></div>

        <div class="container position-relative" style="z-index:2;">
            <div class="row g-5 py-4">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 mb-3 text-decoration-none">
                        <div class="icon-box gradient-card-1" style="width:40px;height:40px;border-radius:0.75rem;">
                            <span class="text-white fw-bold fs-5">A</span>
                        </div>
                        <div>
                            <span class="text-white fw-bold fs-5">Aastha</span>
                            <span class="fw-light fs-5" style="color:#a5b4fc;"> Capital</span>
                        </div>
                    </a>
                    <p class="text-muted-custom small mb-4">Your trusted financial partner providing fast, transparent, and affordable loan solutions to help you achieve your dreams.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="text-white fw-semibold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="small">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="small">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('loans') }}" class="small">Our Services</a></li>
                        <li class="mb-2"><a href="{{ route('calculator') }}" class="small">Loan Calculator</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="small">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Our Loans -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-white fw-semibold mb-3">Our Loans</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('loans.personal') }}" class="small">Personal Loan</a></li>
                        <li class="mb-2"><a href="{{ route('loans.business') }}" class="small">Business Loan</a></li>
                        <li class="mb-2"><a href="{{ route('loans.car') }}" class="small">Car Loan</a></li>
                        <li class="mb-2"><a href="{{ route('loans.education') }}" class="small">Education Loan</a></li>
                        <li class="mb-2"><a href="{{ route('loans.unsecured') }}" class="small">Unsecured Loan</a></li>
                        <li class="mb-2"><a href="{{ route('loans.home') }}" class="small">Home Loan</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-white fw-semibold mb-3">Contact Us</h6>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start gap-2 mb-3">
                            <i class="fas fa-map-marker-alt mt-1" style="color:#818cf8;"></i>
                            <span class="text-muted-custom small">Shop no.8, Near Sukharia Circle,<br>SGNR, Rajasthan, 335001</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-3">
                            <i class="fas fa-phone" style="color:#818cf8;"></i>
                            <a href="tel:+919999999999" class="small">+91 99999 99999</a>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-3">
                            <i class="fas fa-envelope" style="color:#818cf8;"></i>
                            <a href="mailto:info@aasthacapital.com" class="small">info@aasthacapital.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-top pt-4 mt-3" style="border-color:rgba(255,255,255,0.1)!important;">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="text-muted-custom small mb-0">&copy; {{ date('Y') }} Aastha Capital Finance. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                        <a href="{{ route('privacy') }}" class="small me-3">Privacy Policy</a>
                        <a href="{{ route('terms') }}" class="small">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ====== LOAN POPUP (Auto-open after delay) ====== -->
    <div class="loan-popup-overlay" id="loanPopupOverlay">
        <div class="loan-popup">
            <button class="popup-close" id="popupCloseBtn">&times;</button>
            <div class="text-center mb-4">
                <h4 class="text-white fw-bold">Apply for Loan Online</h4>
                <p class="text-muted-custom small mb-0">Quick approval &bull; No hidden charges &bull; PAN India</p>
            </div>
            <form action="{{ route('loan_request') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control form-control-glass" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control form-control-glass" placeholder="Email Address" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" name="phone" class="form-control form-control-glass" placeholder="Phone (10 digits)" pattern="[0-9]{10}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="aadhar_number" class="form-control form-control-glass" placeholder="Aadhaar Number" pattern="[0-9]{12}">
                    </div>
                    <div class="col-md-6">
                        <select name="loan_type" class="form-select form-select-glass" required>
                            <option value="">Select Loan Type</option>
                            <option value="personal">Personal Loan</option>
                            <option value="business">Business Loan</option>
                            <option value="car">Car Loan</option>
                            <option value="education">Education Loan</option>
                            <option value="unsecured">Unsecured Loan</option>
                            <option value="home">Home Loan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="loan_amount" class="form-control form-control-glass" placeholder="Loan Amount (e.g. 500000)">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="state" class="form-control form-control-glass" placeholder="State">
                    </div>
                    <div class="col-12">
                        <textarea name="message" rows="3" class="form-control form-control-glass" placeholder="Tell us about your requirement..."></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-gradient w-100">
                            Submit Application <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert (for flash messages) -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Theme JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Loan Popup - show after 2 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.getElementById('loanPopupOverlay').classList.add('show');
            }, 2000);

            document.getElementById('popupCloseBtn').addEventListener('click', function() {
                document.getElementById('loanPopupOverlay').classList.remove('show');
            });

            document.getElementById('loanPopupOverlay').addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('show');
                }
            });
        });

        // SweetAlert flash messages
        @if(session('success'))
            swal({ text: '{{ session("success") }}', icon: 'success', buttons: false, timer: 3000 });
        @endif
        @if(session('error'))
            swal({ text: '{{ session("error") }}', icon: 'error', buttons: false, timer: 3000 });
        @endif
    </script>

    @stack('scripts')
</body>
</html>
