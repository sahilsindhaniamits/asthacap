<style>
  html, body {
  height: 100%;
  margin: 0;
   background:#eef1f7;
   overflow:hidden;
 } 
 .personal_info{
     display:flex;
     justify-content:center;
     align-items:center;
     background:#fff;
     height:10%;
     width:100%;
 }
 .head{
    font-weight: bold;
    font-size: 17px;
 }
 .info_section{
     display:flex;
     flex-direction:column;
     height:40%;
     width:80%;
     background:#fff;
     margin-top: 27px;
     margin-left: 75px;
     padding-left:1.5em;
}
.info_section2{
     display:flex;
     flex-direction:column;
     height:40%;
     width:80%;
     background:#fff;
     margin-top: 10px;
     margin-left: 75px;
     padding-left:1.5em;
}
.basic{
    display:flex;
    flex-direction:row;
    width:90%;
    height:32%;
    justify-content:space-between;
    align-items:center;
    font-weight:lighter;
    font-size:15px;
    border-bottom:0.096667rem solid #f6f6f6;
}
.basic2{
    display:flex;
    flex-direction:row;
    width:90%;
    height:45%;
    justify-content:space-between;
    align-items:center;
    font-weight:lighter;
    font-size:15px;
    border-bottom:0.096667rem solid #f6f6f6;
}
.basic3{
    display:flex;
    flex-direction:row;
    width:90%;
    height:32%;
    justify-content:space-between;
    align-items:center;
    font-weight:lighter;
    font-size:15px;
}
.info_section_s{
     display:flex;
     flex-direction:column;
     height:60%;
     width:80%;
     background:#fff;
     margin-top: 10px;
     margin-left: 75px;
     padding-left:1.5em;
     justify-content:center;
}
 @media (max-width: 767px) {
     .personal_info{
         height:7%;
         box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
     }
     .info_section{
           margin-left: 4%!important;
           width:85%!important;
           height:20%!important;
           flex-wrap:wrap;
           border-radius: .6rem;
           box-shadow: 0 3px 8px rgb(0 0 0 / 15%)
     }
     .info_section2{
           margin-left: 4%;
           width:85%;
           height:15%;
           flex-wrap:wrap;
           border-radius: .6rem;
           box-shadow: 0 3px 8px rgb(0 0 0 / 15%)
     }
      .info_section_s{
           margin-left: 4%!important;
           width:85%!important;
           height:7%!important;
           border-radius: .6rem;
           box-shadow: 0 3px 8px rgb(0 0 0 / 15%)
          
     }
 }
 </style>
 <html>
     <head>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
     </head>
     <body>
         <header class="personal_info">
             <div class="head"> Personal Info</div>
         </header>
         <section class="info_section">
             <div class="basic">
                 <div>Account</div>
                 <div>{{$username}}</div>
             </div>
              <div class="basic">
                 <div>Mobile Number</div>
                 <div>******</div>
             </div>
              <div class="basic">
                 <div>Email</div>
                 <div>{{$email}}</div>
             </div>
        </section>
         <section class="info_section_s">
            <div class="basic3">
                 <div>Withdrawal Method</div>
               <div><a href="{{route('user.withdraw-method')}}"><i class="fa fa-arrow-right " aria-hidden="true"></i></a></div>
             </div>
        </section>
         <section class="info_section2">
             <div class="basic2">
                  <div>Login Password</div>
                 <div><i class="fa fa-arrow-right login" aria-hidden="true"></i></div>
                </div>
             <div class="basic2">
                  <div>Set Transaction pin</div>
                 <div><i class="fa fa-arrow-right"id="input-pin" aria-hidden="true"></i></div>
            </div>
        </section>
     </body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
</script>

     <script>
           $('.login').click(function() {
        const target = "{{ route('user.reset') }}";

        let input = document.createElement("input");
        input.value = '';
        input.placeholder = 'Enter New Password';
        input.type = 'password';
        input.className = 'swal-content__input';

        swal('', {
                content: input,
                html:'<p>test</p>',
                text: 'Enter New Password',
                icon: 'info',
                buttons: ['Cancel', 'Confirm']
            })
            .then((res) => {
                if (res)
                    makeRequest(target, input.value)
            });
    });
     function makeRequest(target, password = false) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: target,
            data: {
                password
            },
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                if (!result.status) {
                    swal({
                        text: result.message,
                        icon: 'error',
                        timer: 5000,
                        buttons: false,
                    });
                    return;
                }
                swal({
                    text: result.message,
                    icon: 'success',
                    timer: 5000,
                    buttons: false,
                });
            },
            error: function(result) {
                swal({
                    title: 'Something went wrong',
                    text: "Please try again later",
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                })
            }
        });
    }
     </script>
     <script>
  // When the button is clicked
  $('#input-pin').click(function() {
    // Create a div with input fields for the PIN
    let input = document.createElement("input");
     input.setAttribute("maxlength", "4");
     input.addEventListener("input", function() {
  if (this.value.length > 4) {
    // Display a SweetAlert if the input value is longer than 4 characters
   swal({
                    title: 'Something went wrong',
                    text: "Pin Can be of 4 digits",
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                })
    // Truncate the input value to 4 characters
    this.value = this.value.substring(0, 4);
  }
});
        input.value = '';
        input.placeholder = 'Enter 4 digit Transaction Pin';
        input.type = 'password';
        input.className = 'swal-content__input';
    // Show the SweetAlert with the PIN input fields
    swal({
      title: "Enter PIN",
      content: input,
      buttons: {
        cancel: "Cancel",
        confirm: "Submit"
      },
    })
    .then((value) => {
      // If the Submit button is clicked
      if (value) {
        // Get the PIN value
        var pin1 = $('#pin-1').val();
        var pin2 = $('#pin-2').val();
        var pin3 = $('#pin-3').val();
        var pin4 = $('#pin-4').val();
        var pin = pin1 + pin2 + pin3 + pin4;

        // Make an AJAX request to verify the PIN
        $.ajax({
          url: "",
          type: "POST",
          dataType: "json",
          data: {
            pin: pin
          },
          success: function(data) {
            // If the PIN is correct
            if (data.success) {
              swal({
                title: "PIN verified",
                text: "Access granted",
                icon: "success",
              });
            }
            // If the PIN is incorrect
            else {
              swal({
                title: "PIN incorrect",
                text: "Access denied",
                icon: "error",
              });
            }
          },
          error: function() {
            swal({
              title: "Error",
              text: "Something went wrong",
              icon: "error",
            });
          }
        });
      }
    });
  });
</script>
 </html>