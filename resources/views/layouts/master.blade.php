<!DOCTYPE html>
<html lang="en">

<head>

     <style>
    /* ===============================
   LOAN POPUP – FINAL VERSION
================================ */

.loan-popup-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  z-index: 99999;
  display: none;
  align-items: center;
  justify-content: center;
}

.loan-popup {
  background: #ffffff;
  width: 100%;
  max-width: 900px;
  padding: 35px 40px;
  border-radius: 18px;
  position: relative;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
  animation: popupFade 0.4s ease;
}

/* Header */
.popup-header {
  text-align: center;
  margin-bottom: 25px;
}

.popup-header h2 {
  font-size: 32px;
  font-weight: 700;
  color: #2b2f4c;
}

.popup-header p {
  color: #6c757d;
  font-size: 15px;
}

/* Close Button */
.popup-close {
  position: absolute;
  top: 15px;
  right: 18px;
  background: none;
  border: none;
  font-size: 32px;
  color: #999;
  cursor: pointer;
}

.popup-close:hover {
  color: #ff4d4f;
}

/* Inputs */
.popup-form .form-control {
  height: 54px;
  border-radius: 10px;
  border: 1px solid #e4e7f2;
  font-size: 15px;
}

.popup-form textarea.form-control {
  height: auto;
  min-height: 110px;
}

.popup-form .form-control:focus {
  border-color: #5b5bf7;
  box-shadow: 0 0 0 0.15rem rgba(91, 91, 247, 0.15);
}

/* Buttons */
.popup-form .btn {
  height: 52px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 12px;
}

.popup-form .btn-primary {
  background: #5b5bf7;
  border: none;
}

.popup-form .btn-primary:hover {
  background: #4a4ae0;
}

/* Animation */
@keyframes popupFade {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* Mobile */
@media (max-width: 768px) {
  .loan-popup {
    padding: 25px;
    margin: 0 15px;
  }

  .popup-header h2 {
    font-size: 26px;
  }
}


/* =====================================
   FORCE LOGO SIZE FIX (FINAL OVERRIDE)
   ===================================== */

/* Desktop */
.header .logo img,
.header .logo .site-logo {
  height: 60px !important;
  max-height: 60px !important;
  width: auto !important;
}

/* Sticky / scrolled header */
.header.header-scrolled .logo img,
.header.header-scrolled .logo .site-logo {
  height: 50px !important;
  max-height: 50px !important;
}

/* Tablet */
@media (max-width: 992px) {
  .header .logo img,
  .header .logo .site-logo {
    height: 48px !important;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .header .logo img,
  .header .logo .site-logo {
    height: 40px !important;
  }
}

/* =====================================
   FOOTER LOGO SIZE FIX (FINAL)
===================================== */

#footer .footer-logo {
  height: 50px !important;      /* MAIN FIX */
  max-height: 50px !important;
  width: auto !important;
  display: block;
}

/* Tablet */
@media (max-width: 992px) {
  #footer .footer-logo {
    height: 60px !important;
  }
}

/* Mobile */
@media (max-width: 768px) {
  #footer .footer-logo {
    height: 52px !important;
  }
}
/* =====================================
   MOBILE POPUP FIX — FINAL & CORRECT
===================================== */

/* Overlay must allow internal scrolling */
.loan-popup-overlay {
  display: none;
  align-items: center;
  justify-content: center;
}

/* Popup default (desktop) */
.loan-popup {
  max-height: 90vh;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
}

/* Close button always visible */
.popup-close {
  position: sticky;
  top: 10px;
  z-index: 100;
  background: #fff;
  padding-left: 8px;
}

/* ===============================
   MOBILE BEHAVIOUR (KEY FIX)
=============================== */
@media (max-width: 768px) {

  /* Overlay aligns popup from top */
  .loan-popup-overlay {
    align-items: flex-start;
    padding: 20px 12px;
  }

  /* Popup becomes full-height scroll box */
  .loan-popup {
    width: 100%;
    max-height: calc(100vh - 40px);
    padding: 20px;
    border-radius: 14px;
  }

  /* Header compact */
  .popup-header h2 {
    font-size: 22px;
  }

  .popup-header p {
    font-size: 14px;
  }

  /* Buttons touch-friendly */
  .popup-form .btn {
    height: 48px;
    font-size: 15px;
  }
}


</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Prime Finance India - Finance Without Confusion</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('images/logo_loan.png')}}" rel="icon">
  <link href="{{ asset('images/logo_loan.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('template/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template/css/main.css')}}" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.6.4.min.js" ></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('template/vendor/php-email-form/validate.js') }}" defer></script>
  <script src="{{ asset('template/vendor/aos/aos.js') }}" defer></script>
  <script src="{{ asset('template/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
  <script src="{{ asset('template/vendor/purecounter/purecounter_vanilla.js') }}" defer></script>
  <script src="{{ asset('template/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
  <script src="{{ asset('template/vendor/imagesloaded/imagesloaded.pkgd.min.jsj') }}" defer></script>
  <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.jsj') }}" defer></script>

 
  <!-- Main JS File -->
  <script src="{{ asset('template/js/main.js') }}" defer></script>

     <!-- JavaScript Libraries -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
  
    <script>
    var csrfToken = "{{ csrf_token() }}";
  </script>
  <script>
      $(document).ready(function() {
  // Wait for 5 seconds
  setTimeout(function() {
    // Code to display the popup
    $('.popup_overlay').show();
    $('.login_popup').show();
  }, 1300); // 5000 milliseconds = 5 seconds
});
  </script>
  
   



</head>

<body style="overflow-x:hidden">  
  <script>
    @if(session('success'))
        swal({
            text: '{{ session('success') }}',
            icon: 'success',
            buttons: false,
            timer: 3000
        });
    @endif
</script>
<script>
    @if(session('error'))
        swal({
            text: '{{ session('error') }}',
            icon: 'error',
            buttons: false,
            timer: 3000
        });
    @endif
</script>
   
 <!-- Loan Popup Overlay -->
<div class="loan-popup-overlay" id="loanPopup">
  <div class="loan-popup">

    <button class="popup-close" id="popupClose">&times;</button>

    <div class="popup-header">
      <h2>Apply for Loan Online</h2>
      <p>Quick approval • No hidden charges • PAN India</p>
    </div>

    <form action="{{ route('loan_request') }}" method="POST" class="popup-form">
      @csrf

      <div class="row g-3">
        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>

        <div class="col-md-6">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>

        <div class="col-md-6">
          <input type="text" name="phone" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}" required>
        </div>

        <div class="col-md-6">
          <input type="text" name="loan_type" class="form-control" placeholder="Loan Type" required>
        </div>

        <div class="col-md-6">
          <input type="text" name="loan_amount" class="form-control" placeholder="Loan Amount" pattern="[0-9]+" required>
        </div>

        <div class="col-md-6">
          <input type="text" name="state" class="form-control" placeholder="State" required>
        </div>

        <div class="col-12">
          <input type="text" name="aadhar_number" class="form-control" placeholder="Aadhaar Number" maxlength="14" required>
        </div>

        <div class="col-12">
          <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
        </div>

        <div class="col-md-6">
          <button type="submit" class="btn btn-primary w-100">
            Send Request
          </button>
        </div>

        <div class="col-md-6">
          <button type="button" class="btn btn-outline-danger w-100" id="popupCancel">
            Cancel
          </button>
        </div>
      </div>
    </form>

  </div>
</div>

   
    <!--spinner start-->
   <!--<div id="spinner"-->
   <!--     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">-->
   <!--     <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>-->
   <!-- </div>-->
    <!--spinner end-->
  



    <!-- Navbar  -->
    <body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
  <img 
    src="{{ asset('images/logo_loan.png') }}" 
    alt="Prime Finance India Logo"
    class="site-logo"
  >
</a>



      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#emi-calculator">EMI Calculator</a></li>
           <li><a href="/loan-status">Check Loan Status</a></li>
          <li class="dropdown"><a href="#"><span>Loan Type</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/car">Car Loan</a></li>
              <li><a href="/business">Business Loan</a></li>
              <li><a href="/personal">Personal Loan</a></li>
              <li><a href="/education">Education Loan</a></li>
       
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/home">Get Started</a>

    </div>
  </header>
     
     <!--main section start-->
     <main class="main">
         
        @yield('content')
    </main>
    
     <!--main section end-->
    
    <!--Footer Start-->
  
  <footer id="footer" class="footer light-background">

  <div class="container footer-top">
    <div class="row gy-4">

      <!-- Footer About / Logo -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="/" class="logo d-flex align-items-center mb-3">
          <img 
            src="{{ asset('images/logo_loan.png') }}" 
            alt="Prime Finance India Logo"
            class="footer-logo"
          >
        </a>

        <p class="footer-description">
          Prime Finance India is a trusted financial services platform offering
          personal, business, home, car, education, and unsecured loans across India.
          We ensure fast approvals, transparent processes, and customer-first support.
        </p>

        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="/policy">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Our Services -->
      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="/personal">Personal Loan</a></li>
          <li><a href="/business">Business Loan</a></li>
          <li><a href="/home">Home Loan</a></li>
          <li><a href="/car">Car Loan</a></li>
          <li><a href="/education">Education Loan</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Contact Info</h4>
        <p>58, L Block</p>
        <p>Sri Ganganagar, Rajasthan – 335001</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+91 7737327067</span></p>
        <p><strong>Email:</strong> <span>contact@primefinanceindia.com</span></p>
      </div>

    </div>
  </div>

  <!-- Copyright -->
  <div class="container copyright text-center mt-4">
    <p>
      © <span>Copyright</span>
      <strong class="px-1 sitename">Prime Finance India</strong>
      <span>All Rights Reserved</span>
    </p>
  </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!--<div id="preloader"></div>-->
    <!--Footer end-->
    

 
   
   
  
    </body>
     <script>
    $(document).ready(function() {
     

      // Hide popup on cancel button click
      $("#cancelButton").click(function() {
        $(".popup_overlay").hide();
      });
    });
  </script>
  
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
      document.getElementById("loanPopup").style.display = "flex";
      
    }, 2000);

    document.getElementById("popupClose").onclick = closePopup;
    document.getElementById("popupCancel").onclick = closePopup;

    function closePopup() {
      document.getElementById("loanPopup").style.display = "none";
     
    }
  });
</script>

</html>
