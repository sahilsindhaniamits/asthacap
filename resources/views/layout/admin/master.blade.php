<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aastha Capital Finance - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
  <!-- Admin Dark Theme Override -->
  <link rel="stylesheet" href="/css/admin-override.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/logo_loan.png"/>
  <!-- Font Awesome - loaded async -->
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></noscript>

  <style>
    .dropzone {

      justify-content: center;
      display: flex;
      align-items: center;
      flex-direction: column;
      min-height: 150px;
      border: 3px dotted lightgray;
    }
  </style>
  @yield('style')
</head>

<body>
  <div class="container-scroller">

    @include('layout.admin.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:/partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:/partials/_sidebar.html -->
      @include('layout.admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
      
       

          @yield('content')
        
        <!-- content-wrapper ends -->
        <!-- partial:/partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 <a href="#" target="_blank"></a>Prime Finance India.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2025. All rights reserved by Prime Finance India</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/vendors/js/vendor.bundle.base.js" defer></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js" defer></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js" defer></script>
  <script src="/js/hoverable-collapse.js" defer></script>
  <script src="/js/template.js" defer></script>

  <script src="/js/sweetalert.js" defer></script>
  <script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
  </script>

  @yield('script')
</body>

</html>