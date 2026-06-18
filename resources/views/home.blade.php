@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<style>
 
 /* =====================================================
   CONTACT SECTION – SPACING & FORM LAYOUT FIX (FINAL)
   ===================================================== */

/* Contact section overall spacing */
#contact {
  padding-top: 80px;
  padding-bottom: 120px; /* THIS fixes footer overlap */
  background-color: #f9f9fb;
  position: relative;
  z-index: 1;
}

/* Reduce gap between contact cards & form */
#contact .row.gy-4.mb-5 {
  margin-bottom: 40px !important;
}

/* Contact info cards spacing consistency */
#contact .info-item {
  padding: 35px 25px;
  border-radius: 14px;
}

/* ===== FORM CONTAINER (BOX) ===== */
#contact .contact-form-wrapper {
  max-width: 1100px;
  margin: 0 auto;
  background: #ffffff;
  padding: 50px 50px 60px;
  border-radius: 20px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
}

/* Ensure form does NOT touch footer */
#contact .contact-form-wrapper {
  margin-bottom: 80px;
}

/* Form fields */
#contact .contact-form-wrapper input,
#contact .contact-form-wrapper textarea {
  height: 56px;
  border-radius: 12px;
  border: 1px solid #e3e7f2;
  padding: 14px 18px;
  font-size: 15px;
  transition: 0.3s;
}

#contact .contact-form-wrapper textarea {
  height: 140px;
  resize: none;
}

/* Focus state */
#contact .contact-form-wrapper input:focus,
#contact .contact-form-wrapper textarea:focus {
  border-color: #5b5ef5;
  box-shadow: 0 0 0 3px rgba(91, 94, 245, 0.12);
  outline: none;
}

/* Buttons row */
#contact .form-actions {
  margin-top: 30px;
  display: flex;
  gap: 20px;
}

/* Primary button */
#contact .form-actions .btn-primary {
  background: #5b5ef5;
  border: none;
  padding: 14px 36px;
  border-radius: 14px;
  font-size: 16px;
}

/* Reset / Cancel button */
#contact .form-actions .btn-outline-danger {
  padding: 14px 36px;
  border-radius: 14px;
  font-size: 16px;
}

/* ===== MOBILE FIXES ===== */
@media (max-width: 768px) {
  #contact {
    padding-top: 60px;
    padding-bottom: 100px;
  }

  #contact .contact-form-wrapper {
    padding: 30px 20px 40px;
    margin-bottom: 60px;
  }

  #contact .form-actions {
    flex-direction: column;
  }

  #contact .form-actions button {
    width: 100%;
  }
}

/* ===============================
   CONTACT FORM BUTTON STYLING
   =============================== */

/* Common button base */
#contact .contact-form-wrapper .btn {
  height: 56px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 14px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

/* ===== SEND LOAN REQUEST (PRIMARY) ===== */
#contact .contact-form-wrapper .btn-primary {
  background: linear-gradient(135deg, #5b5ef5, #4a6cf7);
  border: none;
  color: #ffffff;
  box-shadow: 0 12px 30px rgba(91, 94, 245, 0.35);
}

/* Hover effect */
#contact .contact-form-wrapper .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 18px 40px rgba(91, 94, 245, 0.45);
  background: linear-gradient(135deg, #4a6cf7, #5b5ef5);
}

/* Click effect */
#contact .contact-form-wrapper .btn-primary:active {
  transform: scale(0.97);
}

/* ===== RESET BUTTON ===== */
#contact .contact-form-wrapper .btn-outline-danger {
  border: 2px solid #ff4d4f;
  color: #ff4d4f;
  background: transparent;
}

/* Reset hover */
#contact .contact-form-wrapper .btn-outline-danger:hover {
  background: #ff4d4f;
  color: #ffffff;
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(255, 77, 79, 0.35);
}

/* Reset click */
#contact .contact-form-wrapper .btn-outline-danger:active {
  transform: scale(0.97);
}

/* ===== MOBILE ===== */
@media (max-width: 768px) {
  #contact .contact-form-wrapper .btn {
    height: 52px;
    font-size: 15px;
  }
}


</style>
<section id="hero" class="hero section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="badge-wrapper mb-3">
          <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
            <div class="icon-circle me-2">
              <i class="bi bi-bell"></i>
            </div>
            <span class="badge-text me-3">Trusted Loan Solutions</span>
          </div>
        </div>

        <h1 class="hero-title mb-4">
          Fast, Secure & Hassle-Free Loans Across India
        </h1>

        <p class="hero-description mb-4">
          Prime Finance India provides Personal, Business, Car, Education, Unsecured and Home Loans
          with quick approval, zero hidden charges and PAN India service.
          Apply online and get loan approval within 24 hours.
        </p>

        <div class="cta-wrapper">
          <a href="#contact" class="btn btn-primary">Apply Now</a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-image">
          <img src="{{ asset('template/img/illustration/illustration-168.webp')}}" alt="Prime Finance India Loans" class="img-fluid" loading="lazy">
        </div>
      </div>
    </div>

    <div class="row feature-boxes">
      <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
            <i class="bi bi-gear"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">25,000+ Loans Approved</h3>
            <p class="feature-text">
              Successfully serving thousands of customers across India with fast and reliable loan approvals.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box">
          <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
            <i class="bi bi-window"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">No Hidden Charges</h3>
            <p class="feature-text">
              No file charge, no processing fee and complete transparency from start to finish.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-box">
          <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
            <i class="bi bi-headset"></i>
          </div>
          <div class="feature-content">
            <h3 class="feature-title">24/7 Customer Support</h3>
            <p class="feature-text">
              Dedicated support team available round-the-clock to assist you at every step.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p class="who-we-are">Who We Are</p>
        <h3>Your Trusted Financial Partner – Prime Finance India</h3>

        <p class="fst-italic">
          Prime Finance India is a customer-centric financial services company committed to
          simplifying the loan process for individuals and businesses across India.
        </p>

        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Wide range of secured and unsecured loan options</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Fast approvals with minimal documentation</span></li>
          <li><i class="bi bi-check-circle"></i> <span>98% customer satisfaction with ethical practices</span></li>
        </ul>

        <a href="#services" class="read-more">
          <span>Explore Our Loans</span><i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="template/img/about/about-portrait-3.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <img src="template/img/about/1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-12">
                <img src="template/img/about/about-123.webp" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- /About Section -->

<!-- How We Work Section -->
<section id="how-we-work" class="how-we-work section">

  <div class="container section-title" data-aos="fade-up">
    <h2>How We Work</h2>
    <p>Simple, transparent and fast loan process</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="steps-5">
      <div class="process-container">

        <div class="process-item" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <span class="step-number">01</span>
            <div class="card-body">
              <div class="step-icon">
                <i class="bi bi-pencil-square"></i>
              </div>
              <div class="step-content">
                <h3>Apply Online</h3>
                <p>Submit your loan application online in just a few minutes.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="process-item" data-aos="fade-up" data-aos-delay="300">
          <div class="content">
            <span class="step-number">02</span>
            <div class="card-body">
              <div class="step-icon">
                <i class="bi bi-gear"></i>
              </div>
              <div class="step-content">
                <h3>Document Verification</h3>
                <p>Our team verifies your documents quickly and securely.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="process-item" data-aos="fade-up" data-aos-delay="400">
          <div class="content">
            <span class="step-number">03</span>
            <div class="card-body">
              <div class="step-icon">
                <i class="bi bi-search"></i>
              </div>
              <div class="step-content">
                <h3>Loan Approval</h3>
                <p>Get approval within 24 hours of verification.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="process-item" data-aos="fade-up" data-aos-delay="500">
          <div class="content">
            <span class="step-number">04</span>
            <div class="card-body">
              <div class="step-icon">
                <i class="bi bi-rocket-takeoff"></i>
              </div>
              <div class="step-content">
                <h3>Receive Funds</h3>
                <p>Loan amount is credited directly to your bank account.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- /How We Work Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Our Loan Services</h2>
    <p>Flexible loan solutions for every financial need</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center g-5">

      <!-- Personal Loan -->
      <div class="col-md-6" data-aos="fade-right">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-person-check"></i>
          </div>
          <div class="service-content">
            <h3>Personal Loan</h3>
            <p>
              Ideal for medical emergencies, travel, weddings or urgent expenses.
              No collateral required.
              Quick approval with minimal paperwork.
              Flexible repayment options.
              Transparent and secure process.
            </p>
          </div>
        </div>
      </div>

      <!-- Business Loan -->
      <div class="col-md-6" data-aos="fade-left">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-briefcase-fill"></i>
          </div>
          <div class="service-content">
            <h3>Business Loan</h3>
            <p>
              Designed for business expansion and working capital needs.
              Suitable for startups and SMEs.
              Fast approval process.
              Unsecured options available.
              Minimal documentation required.
            </p>
          </div>
        </div>
      </div>

      <!-- Car Loan -->
      <div class="col-md-6" data-aos="fade-right">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-car-front-fill"></i>
          </div>
          <div class="service-content">
            <h3>Car Loan</h3>
            <p>
              Finance new or used vehicles with ease.
              Competitive interest rates.
              Flexible EMI options.
              Quick processing.
              Smooth and hassle-free experience.
            </p>
          </div>
        </div>
      </div>

      <!-- Education Loan -->
      <div class="col-md-6" data-aos="fade-left">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-mortarboard-fill"></i>
          </div>
          <div class="service-content">
            <h3>Education Loan</h3>
            <p>
              Support higher education in India or abroad.
              Student-friendly repayment plans.
              Easy eligibility criteria.
              Expert guidance.
              Reliable financial assistance.
            </p>
          </div>
        </div>
      </div>

      <!-- Unsecured Loan -->
      <div class="col-md-6" data-aos="fade-right">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-unlock-fill"></i>
          </div>
          <div class="service-content">
            <h3>Unsecured Loan</h3>
            <p>
              No collateral required.
              Fast eligibility check.
              Quick approvals.
              Flexible tenure options.
              Ideal for immediate financial needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Home Loan -->
      <div class="col-md-6" data-aos="fade-left">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-house-door-fill"></i>
          </div>
          <div class="service-content">
            <h3>Home Loan</h3>
            <p>
              Affordable home loans for purchase or construction.
              Competitive interest rates.
              Long repayment tenure.
              Simple documentation.
              Transparent policies.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- /Services Section -->


<!-- EMI Calculator Section -->

<section id="emi-calculator" class="section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Loan EMI Calculator</h2>
    <p>Calculate your monthly EMI easily and plan your loan better</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-stretch">

      <!-- EMI Input Form -->
      <div class="col-lg-4">
        <div class="p-4 border rounded h-100">
          <h4 class="mb-4">Enter Loan Details</h4>

          <label for="loanAmount" class="form-label">Loan Amount</label>
          <input type="number" id="loanAmount" class="form-control mb-3" placeholder="Enter loan amount">

          <label for="interestRate" class="form-label">Interest Rate (%)</label>
          <input type="number" id="interestRate" class="form-control mb-3" placeholder="Enter interest rate">

          <label for="loanTenure" class="form-label">Loan Tenure</label>
          <div class="input-group mb-3">
            <input type="number" id="loanTenure" class="form-control" placeholder="Enter tenure">
            <select id="tenureOption" class="form-select">
              <option value="months">Months</option>
              <option value="years">Years</option>
            </select>
          </div>

          <button class="btn btn-primary w-100" onclick="calculateEMI()">
            Calculate EMI
          </button>
        </div>
      </div>

      <!-- EMI Details -->
      <div class="col-lg-4">
        <div class="p-4 border rounded h-100">
          <h4 class="mb-4">EMI Details</h4>
          <p id="emiAmount">EMI Amount: —</p>
          <p id="interestPayable">Interest Payable: —</p>
          <p id="totalPayment">Total Payment: —</p>
        </div>
      </div>

      <!-- EMI Chart -->
      <div class="col-lg-4">
        <div class="p-4 border rounded h-100">
          <h4 class="mb-4">Payment Breakup</h4>
          <canvas id="chart" height="260"></canvas>
        </div>
      </div>

    </div>
  </div>

</section>


<!-- Call To Action 2 Section -->
<section id="call-to-action-2" class="call-to-action-2 section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5 align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="cta-image-wrapper">
          <img src="template/img/cta/cta-4.webp" alt="Prime Finance India Loans" class="img-fluid rounded-4">
          <div class="cta-pattern"></div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="cta-content">
          <h2>Get the Right Loan for Your Needs Today</h2>
          <p class="lead">
            Prime Finance India helps you turn your financial goals into reality with fast,
            transparent and reliable loan solutions across India.
          </p>

          <div class="cta-features">
            <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
              <i class="bi bi-check-circle-fill"></i>
              <span>Approval within 24 hours</span>
            </div>
            <div class="feature-item" data-aos="zoom-in" data-aos-delay="450">
              <i class="bi bi-check-circle-fill"></i>
              <span>No hidden charges or file fees</span>
            </div>
            <div class="feature-item" data-aos="zoom-in" data-aos-delay="500">
              <i class="bi bi-check-circle-fill"></i>
              <span>PAN India service with expert support</span>
            </div>
          </div>

          <div class="cta-action mt-5">
            <a href="#contact" class="btn btn-primary btn-lg me-3">Apply Now</a>
            <a href="#services" class="btn btn-outline-primary btn-lg">View Loan Options</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Call To Action 2 Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>What our customers say about Prime Finance India</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="testimonials-slider swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 800,
          "autoplay": { "delay": 5000 },
          "slidesPerView": 1,
          "spaceBetween": 30,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "768": { "slidesPerView": 2 },
            "1200": { "slidesPerView": 3 }
          }
        }
      </script>

      <div class="swiper-wrapper">

        <!-- Review 1 -->
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>
                <i class="bi bi-quote quote-icon"></i>
                My personal loan was approved within 24 hours without any hassle.
                The process was smooth and fully transparent.
              </p>
            </div>
            <div class="testimonial-profile">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="profile-info">
                
                <div>
                  <h3>Rahul Sharma</h3>
                  <h4>Salaried Professional</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>
                <i class="bi bi-quote quote-icon"></i>
                Prime Finance India helped me secure a business loan quickly.
                No hidden charges and very supportive staff.
              </p>
            </div>
            <div class="testimonial-profile">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="profile-info">
               
                <div>
                  <h3>Ankit Verma</h3>
                  <h4>Business Owner</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>
                <i class="bi bi-quote quote-icon"></i>
                Everything was clearly explained and the loan amount was
                credited directly to my bank account.
              </p>
            </div>
            <div class="testimonial-profile">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="profile-info">
                
                <div>
                  <h3>Pooja Mehta</h3>
                  <h4>Homemaker</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>
                <i class="bi bi-quote quote-icon"></i>
                Fast approval, minimal documentation and great support.
                Highly recommended loan service.
              </p>
            </div>
            <div class="testimonial-profile">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="profile-info">
               
                <div>
                  <h3>Neha Singh</h3>
                  <h4>IT Professional</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 5 -->
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>
                <i class="bi bi-quote quote-icon"></i>
                One of the best loan experiences I’ve had.
                Transparent process and helpful team.
              </p>
            </div>
            <div class="testimonial-profile">
              <div class="rating">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="profile-info">
                
                <div>
                  <h3>Vikas Jain</h3>
                  <h4>Self Employed</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>
<!-- /Testimonials Section -->


<!-- FAQ Section (STRUCTURE UNCHANGED) -->
<section id="faq" class="faq section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
        <div class="faq-contact-card">
          <div class="card-icon">
            <i class="bi bi-question-circle"></i>
          </div>
          <div class="card-content">
            <h3>Still Have Questions?</h3>
            <p>
              Our experts are here to help you understand loan eligibility,
              approval process and repayment options clearly.
            </p>
            <div class="contact-options">
              <a href="#contact" class="contact-option"><i class="bi bi-envelope"></i><span>Email Support</span></a>
              <a href="#contact" class="contact-option"><i class="bi bi-chat-dots"></i><span>Contact</span></a>
              <a href="#contact" class="contact-option"><i class="bi bi-telephone"></i><span>Call Us</span></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="faq-accordion">

          <div class="faq-item faq-active">
            <div class="faq-header">
              <h3>How fast can I get loan approval?</h3>
              <i class="bi bi-chevron-down faq-toggle"></i>
            </div>
            <div class="faq-content">
              <p>Most loans are approved within 24 hours after verification.</p>
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header">
              <h3>Are there any hidden charges?</h3>
              <i class="bi bi-chevron-down faq-toggle"></i>
            </div>
            <div class="faq-content">
              <p>No. We follow a transparent process with zero hidden costs.</p>
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header">
              <h3>Do you provide PAN India service?</h3>
              <i class="bi bi-chevron-down faq-toggle"></i>
            </div>
            <div class="faq-content">
              <p>Yes, our services are available across India.</p>
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-header">
              <h3>Is collateral required for every loan?</h3>
              <i class="bi bi-chevron-down faq-toggle"></i>
            </div>
            <div class="faq-content">
              <p>No, many of our loan options are unsecured.</p>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
<!-- /FAQ Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Get in touch with Prime Finance India</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Contact Info Cards -->
    <div class="row gy-4 mb-4">

      <div class="col-lg-4">
        <div class="info-card">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h3>Our Address</h3>
          <p>PAN India Service – Online Loan Assistance</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card">
          <div class="icon-box">
            <i class="bi bi-telephone"></i>
          </div>
          <h3>Contact Number</h3>
          <p>
            Mobile: +91 7737327067<br>
            Email: Contact@primefinanceindia.com
          </p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card">
          <div class="icon-box">
            <i class="bi bi-clock"></i>
          </div>
          <h3>Opening Hour</h3>
          <p>24/7 Customer Support Available</p>
        </div>
      </div>

    </div>

    <!-- ✅ FORM WRAPPER START -->
    <div class="contact-form-wrapper" data-aos="fade-up" data-aos-delay="300">

      <form action="{{ route('loan_request') }}" method="POST">
        @csrf

        <div class="row g-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
          </div>

          <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email Address*" required>
          </div>

          <div class="col-md-6">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number*" pattern="[0-9]{10}" required>
          </div>

          <div class="col-md-6">
            <input type="text" name="loan_type" class="form-control" placeholder="Loan Type*" required>
          </div>

          <div class="col-md-6">
            <input type="text" name="loan_amount" class="form-control" placeholder="Loan Amount*" pattern="[0-9]+" required>
          </div>

          <div class="col-md-6">
            <input type="text" name="state" class="form-control" placeholder="State*" required>
          </div>

          <div class="col-12">
            <input
              type="text"
              name="aadhar_number"
              class="form-control"
              placeholder="Aadhaar Number*"
              maxlength="14"
              pattern="[0-9]*"
              required
            >
          </div>

          <div class="col-12">
            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
          </div>

          <div class="col-md-6">
            <button type="submit" class="btn btn-primary w-100">
              Send Loan Request
            </button>
          </div>

          <div class="col-md-6">
            <button type="reset" class="btn btn-outline-danger w-100">
              Reset
            </button>
          </div>

        </div>
      </form>

    </div>
    <!-- ✅ FORM WRAPPER END -->

  </div>
</section>
<!-- /Contact Section -->



<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let chart;

document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById('chart').getContext('2d');

  chart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Principal Amount', 'Interest Amount'],
      datasets: [{
        data: [50, 50],
        backgroundColor: [
          '#5f5af6',   // Theme primary (purple/blue)
          '#e4e6ef'    // Light neutral
        ],
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });
});

function calculateEMI() {
  const principalAmount = parseFloat(document.getElementById('loanAmount').value);
  const interestRate = parseFloat(document.getElementById('interestRate').value);
  const loanTenure = parseFloat(document.getElementById('loanTenure').value);
  const tenureOption = document.getElementById('tenureOption').value;

  if (
    isNaN(principalAmount) || isNaN(interestRate) || isNaN(loanTenure) ||
    principalAmount <= 0 || interestRate <= 0 || loanTenure <= 0
  ) {
    alert('Please enter valid values.');
    return;
  }

  const monthlyRate = interestRate / 100 / 12;
  const tenureMonths = tenureOption === 'months' ? loanTenure : loanTenure * 12;

  const emi = principalAmount * monthlyRate * Math.pow(1 + monthlyRate, tenureMonths) /
              (Math.pow(1 + monthlyRate, tenureMonths) - 1);

  const totalPayment = emi * tenureMonths;
  const interestPayable = totalPayment - principalAmount;

  document.getElementById('emiAmount').textContent =
    'EMI Amount: ₹' + emi.toFixed(2);

  document.getElementById('interestPayable').textContent =
    'Interest Payable: ₹' + interestPayable.toFixed(2);

  document.getElementById('totalPayment').textContent =
    'Total Payment: ₹' + totalPayment.toFixed(2);

  const principalPercentage = (principalAmount / totalPayment) * 100;
  const interestPercentage = (interestPayable / totalPayment) * 100;

  chart.data.datasets[0].data = [
    principalPercentage.toFixed(2),
    interestPercentage.toFixed(2)
  ];

  chart.update();
}
</script>


<script type="application/json" class="swiper-config">
{
  "loop": true,
  "speed": 100,
  "autoplay": {
    "delay": 1000,
    "disableOnInteraction": false
  },
  "slidesPerView": 1,
  "spaceBetween": 30,
  "pagination": {
    "el": ".swiper-pagination",
    "type": "bullets",
    "clickable": true
  },
  "breakpoints": {
    "768": { "slidesPerView": 2 },
    "1200": { "slidesPerView": 3 }
  }
}
</script>


@endsection
