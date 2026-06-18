<!DOCTYPE html>
<html lang="en">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Prime Finance India</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/feather/feather.css">
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/logo_loan.png"/>

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
  <script src="/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <script src="/js/settings.js"></script>
  <script src="/js/todolist.js"></script>

  <script src="/js/sweetalert.js"></script>
  <script src="/js/jquery.min.js"></script>
  <script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
  </script>

  @yield('script')
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>