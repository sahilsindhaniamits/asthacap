@extends('layouts.master')



@section('content')
         
         
      <div class="container-fluid  py-5" style="margin-bottom: 90px;background-color : black">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Personal Loan</h1>
                    <a href="/home" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Personal Loan</a>
                </div>
            </div>
        </div>
       
           <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Personal Loan</h1>
                    </div>
                    <p class="mb-4">With Shri Saraswati Finance, you can easily avail loans ranging from ₹20,000 to ₹20,00,000 to meet all your personal needs — whether it’s for education, travel, medical emergencies, home renovation, or any other requirement. Our process is completely online, ensuring that you can apply from the comfort of your home without any paperwork hassles. Once approved, the loan amount is transferred directly to your bank account quickly and securely. Experience a smooth, fast, and convenient borrowing process with Shri Saraswati Finance, where your financial needs are our top priority.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="bi bi-check text-primary me-3"></i>Highly Trained Executives</h5>
                            <h5 class="mb-3"><i class="bi bi-check text-primary me-3"></i>Fast Approval</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="bi bi-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="bi bi-check text-primary me-3"></i>Trusted by 12K Clients</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                         <div class="d-flex align-items-center justify-content-center rounded" style="width: 60px;  height: 60px; background:#5b5ef5;">
                            <i class="bi bi-phone text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91 7737327067</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="background:#5b5ef5; border-color:#5b5ef5;">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.4s" src="{{ asset('/images/personal_loan.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
       
      
     
   
          
                
             
                @endsection
               <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function(){
     $('.get_status').click(function(){
     var appno = $('.app_no').val();
   
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url:"{{route('check_status')}}" ,
    method: "GET",
    data: {appno},
    success: function(response) {
        
     
      $('.name').text(response.name);
      $('.email').text(response.email);
      $('.mobile').text(response.phone);
      $('.loan_amt').text(response.loan_amount);
      $('.loan_type').text(response.loan_type);
      $('.status').text((response.loan_status == 0) ? 'Pending' : 'Approved');
      
    },
    error: function(response) {
        swal({
                        text: ' Request Failed, Wrong Application Number',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
      
    }
  });
       
    
  });
      
});
    </script>
