@extends('layouts.master')



@section('content')
         
   <div class="container-fluid  py-5" style="margin-bottom: 90px;background-color : black">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Loan Status</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Loan Status</a>
                </div>
            </div>
        </div>
        <div class="container py-5 mt-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase mt-3 mt-5">Check Loan Status</h5>
                <h2 class="mb-0 mt-5">Enter your application no: in input field to track loan status</h2>
            </div>
       
      <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                     <div class="col-12">
                                <input type="text"name="appno" class="form-control border-0 bg-light px-4 app_no" placeholder="Application Number" style="height: 55px;">
                                <button  style="
    background-color: #0cbe7e;
    border-color: #0cbe7e;
"class="btn btn-primary py-2 px-4 mt-4 get_status mb-4">Check Now</button>
                    </div>
                </div>
     </div>
     
     <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                
            </div>
           <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Your Details</h4>
                            <small class="text-uppercase">Enter Application Number to see loan details</small>
                        </div>
                        
                        <div class="p-5 pt-0">
                           
                            <div class="d-flex justify-content-between mb-3"><span>Name</span><div class=" name text-primary pt-1"></div></div>
                            <div class="d-flex justify-content-between mb-3"><span>Email</span><i class="mobile text-primary pt-1"></i></div>
        
                            <div class="d-flex justify-content-between mb-2"><span>Loan Amount</span><i class="loan_amt text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Loan type</span><i class="loan_type text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Status</span><i class="status text-danger pt-1"></i></div>
                            
                        </div>
                    </div>
                </div>
              </div>
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
        
        if(response.status){
     
      $('.name').text(response.name);
      $('.email').text(response.email);
      $('.mobile').text(response.phone);
      $('.loan_amt').text(response.loan_amount);
      $('.loan_type').text(response.loan_type);
      $('.status').text((response.loan_status == 0) ? 'Pending' : 'Approved');
        }
        else{
            
            alert(response.message);
                // swal({
                //         title :"APplication"
                //         text: ' Request Failed, Wrong Application Number',
                //         icon: 'error',
                //         buttons: false,
                //         timer: 5000
                //     });
        }
      
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
