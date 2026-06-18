@extends('layouts.master')



@section('content')
           <div class="header-and-banner-con w-100 generic-banner-con">
        <div class="header-and-banner-inner-con">
          @include('header')
            <section class="banner-main-con">
                <div class="container">
                    <!--banner-start-->
                    <div class="banner-con text-center">
                        <h1>Get In Touch</h1>
                        <p class="col-lg-7 col-md-8 p-0 ml-auto mr-auto" style="margin-left: auto;
    margin-right: auto;">Feel Free to Contact Us!
                        </p>
                        <div class="generic-banner-link">
                            <a href="index.html">Home</a>
                            <span>~</span>
                            <a>Contact</a>
                        </div>
                    </div>
                    <!--banner-end-->
                </div>
            </section>
        </div>
    </div>
         
   
   <!-- form section -->
    <div class="w-100 float-left form-con padding-bottom padding-top wow fadeInUp mt-3">
        <div class="container">
            <form class="form-inner-con" id="contact_form" action="{{ route('loan_request') }}" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="lab_cls">
                            <label for="" class="lab_cls">Name :</label>
                            <input type="text" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="lab_cls">
                            <label for="" class="lab_cls">Email :</label>
                            <input type="email" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="lab_cls">
                            <label for="" class="lab_cls">Phone Number :</label>
                            <input type="text" placeholder="Enter Your Phone Number" name="phone" class="">
                        </div>
                    </div>
                      <div class="col-lg-6 col-md-6 col-12">
                           <div class="lab_cls">
                            <label for="" class="lab_cls">Loan Type :</label>
                            <input type="text" placeholder="Enter Your Name" name="loan_type">
                        </div>
                         <div class="lab_cls">
                            <label for="" class="lab_cls">Loan Amount :</label>
                            <input type="text" placeholder="Enter Your Name" name="loan_amount">
                        </div>
                          </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <!--<label for="" class="lab_cls">Add Comment :</label>-->
                        <!--<textarea class="w-100" placeholder="Add Comment" rows="3" name="message"></textarea>-->
                        <button type="submit" class="contact-btn">Send Message <span
                                class="far fa-envelope"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- form section -->
    <!-- service section -->
    <section class="w-100 float-left  padding-bottom">
        <div class="container">
            <div class="position-relative dotted-img">
                <div class="genric-heading text-center">
                    <h2 class="position-relative">Get Connected
                    </h2>
                    <p class="mb-0">Bridge the digital gap together
                    </p>
                </div>
                <div class="service-box wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="service-box-item _1 position-relative text-center">
                                <figure>
                                    <img src="assets/image/Phone.png" alt="service-icon1" class="img-fluid w-25">
                                </figure>
                                <h4>Phone Number</h4>
                                <p class="mb-0"><a href="tel:+917878388785">+91 7878388785</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="service-box-item _1 position-relative text-center">
                                <figure>
                                    <img src="assets/image/Location.png" alt="service-icon1" class="img-fluid w-25">
                                </figure>
                                <h4>Location</h4>
                               
                                <p class="mb-0">Sukharia Nagar, SGNR, Raj. 335001</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="service-box-item _1 position-relative text-center">
                                <figure>
                                    <img src="assets/image/Email.png" alt="service-icon1" class="img-fluid w-25">
                                </figure>
                                <h4>Email</h4>
                                <p class="mb-0"><a href="mailto:contact@ambefinance.com">contact@ambefinance.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- service section -->
    <!-- map section -->
    <!--<div class="w-100 float-left map-con padding-bottom pt-3">-->
    <!--    <div class="container">-->






    <!--        <iframe-->
    <!--            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.057693550265!2d72.98372068338344!3d19.192682301998282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b92bdb58dbdb%3A0xe8bbb2bce95d69bc!2sOld%20Belapur%20Rd%2C%20Kalwa%20West%2C%20Budhaji%20Nagar%2C%20Kalwa%2C%20Thane%2C%20Maharashtra%20400605!5e0!3m2!1sen!2sin!4v1695880946817!5m2!1sen!2sin"-->
    <!--            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
    <!--            referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- map section -->

@endsection
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
  <script>
         $(document).ready(function(){
            
$("#request").on("click", function(event) {
 
  
   var name = $("#name").val();
   var email = $("#email").val();
   var phone = $("#phone").val();
   var state = $("#state").val();
   var loan_amount = $("#loan_amount").val();
   var loan_type = $("#loan_type").val();
   var message = $("#message").val();

  // Send an AJAX request to the Laravel backend to register the new user
  $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
  },
    url: "/loan-reuqest",
    method: "POST",
    data: {name,email,phone,state,loan_amount,loan_type,message},
    success: function(response) {
      swal({
                        text: 'Request sent Successfully,we will look and update you about loan status',
                        icon: 'success',
                        buttons: false,
                        timer: 5000
                    });
    },
    error: function(response) {
       swal({
                        text: ' Request Failed,Contact To Developer',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
    }
  });
});

             });
    </script>


   