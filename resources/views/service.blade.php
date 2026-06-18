@extends('layouts.master')



@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Service Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-8">
            <div class="service-hero">
              <img src="assets/img/services/services-7.webp" alt="" class="img-fluid">
              <div class="service-badge">
                <span>Premium Service</span>
              </div>
            </div>

            <div class="service-content">
              <div class="service-header">
                <h2>Digital Marketing Strategy &amp; Implementation</h2>
                <p class="service-intro">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
              </div>

              <div class="service-features">
                <h4>What You'll Get</h4>
                <div class="row gy-3">
                  <div class="col-md-6">
                    <div class="feature-item">
                      <div class="feature-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                      </div>
                      <div class="feature-content">
                        <h5>Analytics &amp; Reporting</h5>
                        <p>Comprehensive tracking and performance analysis</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item">
                      <div class="feature-icon">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="feature-content">
                        <h5>Audience Targeting</h5>
                        <p>Precise demographic and behavioral targeting</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item">
                      <div class="feature-icon">
                        <i class="bi bi-megaphone"></i>
                      </div>
                      <div class="feature-content">
                        <h5>Multi-Channel Campaigns</h5>
                        <p>Integrated social media and search marketing</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item">
                      <div class="feature-icon">
                        <i class="bi bi-gear"></i>
                      </div>
                      <div class="feature-content">
                        <h5>Strategy Optimization</h5>
                        <p>Continuous refinement for maximum ROI</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="service-process">
                <h4>Our Process</h4>
                <div class="process-steps">
                  <div class="process-step">
                    <div class="step-number">01</div>
                    <div class="step-content">
                      <h5>Discovery &amp; Analysis</h5>
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                  </div>
                  <div class="process-step">
                    <div class="step-number">02</div>
                    <div class="step-content">
                      <h5>Strategy Development</h5>
                      <p>Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus.</p>
                    </div>
                  </div>
                  <div class="process-step">
                    <div class="step-number">03</div>
                    <div class="step-content">
                      <h5>Implementation</h5>
                      <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit eget tincidunt nibh pulvinar.</p>
                    </div>
                  </div>
                  <div class="process-step">
                    <div class="step-number">04</div>
                    <div class="step-content">
                      <h5>Monitoring &amp; Optimization</h5>
                      <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus donec sollicitudin molestie.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="service-gallery">
                <h4>Project Showcase</h4>
                <div class="row gy-3">
                  <div class="col-md-4">
                    <img src="assets/img/services/services-2.webp" alt="" class="img-fluid rounded">
                  </div>
                  <div class="col-md-4">
                    <img src="assets/img/services/services-8.webp" alt="" class="img-fluid rounded">
                  </div>
                  <div class="col-md-4">
                    <img src="assets/img/services/services-11.webp" alt="" class="img-fluid rounded">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-sidebar">

              <div class="service-menu">
                <h4>Our Services</h4>
                <div class="menu-list">
                  <a href="#" class="menu-item active">
                    <i class="bi bi-arrow-right"></i>
                    <span>Digital Marketing</span>
                  </a>
                  <a href="#" class="menu-item">
                    <i class="bi bi-arrow-right"></i>
                    <span>Web Development</span>
                  </a>
                  <a href="#" class="menu-item">
                    <i class="bi bi-arrow-right"></i>
                    <span>Brand Strategy</span>
                  </a>
                  <a href="#" class="menu-item">
                    <i class="bi bi-arrow-right"></i>
                    <span>Content Creation</span>
                  </a>
                  <a href="#" class="menu-item">
                    <i class="bi bi-arrow-right"></i>
                    <span>SEO Optimization</span>
                  </a>
                </div>
              </div>

              <div class="service-info">
                <h4>Service Details</h4>
                <div class="info-list">
                  <div class="info-item">
                    <span class="info-label">Duration:</span>
                    <span class="info-value">3-6 months</span>
                  </div>
                  <div class="info-item">
                    <span class="info-label">Team Size:</span>
                    <span class="info-value">4-6 specialists</span>
                  </div>
                  <div class="info-item">
                    <span class="info-label">Delivery:</span>
                    <span class="info-value">Bi-weekly reports</span>
                  </div>
                  <div class="info-item">
                    <span class="info-label">Support:</span>
                    <span class="info-value">24/7 monitoring</span>
                  </div>
                </div>
              </div>

              <div class="contact-card">
                <div class="contact-content">
                  <h4>Need Help?</h4>
                  <p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                  <div class="contact-info">
                    <div class="contact-item">
                      <i class="bi bi-telephone"></i>
                      <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                      <i class="bi bi-envelope"></i>
                      <span>info@example.com</span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary">Get Quote</a>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->
  

@endsection

   