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
     width:100%;s
 }
  .head{
    font-weight: bold;
    font-size: 17px;
 }
  .info_section{
     display:flex;
     flex-direction:column;
     height:50%;
     width:80%;
     background:#fff;
     margin-top: 27px;
     margin-left: 75px;
     border-radius: 1rem!important;
     box-shadow: 0 3px 8px rgb(0 0 0 / 25%)
    
}
.basic{
    display:flex;
    flex-direction:row;
    width:90%;
    height:33%;
    justify-content:space-between;
    align-items:center;
    font-weight:bold;
    font-size:14px;
   box-shadow: 0px 0.1px 0px 0px grey;
}
.withdraw_field{
    display:flex;
    width:100%;
    justify-content:space-between;
    align-items:center;
    background:#fff;
    height:30%;
    flex-wrap:nowrap;
    font-size:13px;
}
.input{
    flex:0 0 80%;
    }
    .field{
        width:95%;
        height:100%;
        font-size:13px;
    }
    input {
  border: none;
  outline: none;
}
 select {
  border: none;
  outline: none;
}

::placeholder {
  font-size: 13px; /* customize the size of the placeholder text */
  color: #999; /* customize the color of the placeholder text */
}
.red_dot{
   
  display: inline-block;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: #ee0a24;
  margin-left: 1rem;
}
.headomg{
    display:flex;
    width:100%;
    height:16%;
    justify-content:flex-start;
    padding-left:2em;
    align-items:center;
    font-weight:bold;
    font-size:17px;
    
}
  @media (max-width: 767px) {
        .personal_info{
         height:7%;
         box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
     }
          .info_section{
           margin-left: 2.2%!important;
           width:96%!important;
           height:35%!important;
           margin-top: -10px;
     }
     .input{
    flex:0 0 70%;
    }
    .address{
        height:40%!important;
        margin-top:-29px!important;
       gap:1rem;
    }
    .headomg{
        font-size:15px;
    }
    .withdraw_button{
        width:50%!important;
        height:30%!important;
        font-weight:bold;
        font-size:15px;
        color:#fff;
        margin-left:25%;
        background-color:#ff362e;
        border:none;
        border-radius:2.5rem!important;
        margin-bottom:1rem!important;
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
             <div class="head">Withdraw Method</div>
         </header>
         <form action="{{route('user.withdraw.details')}}" method="POST" >
             @csrf
         <div class="headomg" style="margin-top:-21px">Identity Information</div>
          <section class="info_section" style="margin-top:-29px">
              
           <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Real Name</div>
               <div class="input"><input type="text" placeholder="Please enter real name" class="field" name="real_name" required></div>
           </div>
             <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Email</div>
               <div class="input"><input type="text" placeholder="Please enter E-mail address" class="field" name="email" required></div>
           </div>
             <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Phone</div>
               <div class="input"><input type="text" placeholder="Please enter phone number" class="field" name="phone" required></div>
           </div>
           <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Address</div>
               <div class="input"><input type="text" placeholder="Please enter home address" class="field" name="real_address" required></div>
           </div>
           
        </section>
         <div class="headomg" style="margin-top:-29px">Withdrawal Method Information</div>
         <section class="info_section address" style="margin-top:20px">
              
           <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Add Type</div>
               <div class="input"><input type="text" placeholder="USDT" class="field" value="USDT" required></div>
           </div>
             <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">Network</div>
               <div class="input"><select type="text" class="field" name="network" required>
                    <option value=2>TRC-20</option>
                    <option value=1>ERC-20</option>
                    </select>
               </div>
           </div>
            <div class="withdraw_field">
               <div class="red_dot"><i></i></div>
               <div class="name">USDT</div>
               <div class="input"><input type="text" placeholder=" Please enter network address" class="field" name="network_address" required></div>
           </div>
           <button type="submit" class="withdraw_button">Submit</button>
            </section>
            
        </form>
         </body>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script>
         @if(session('order_limit'))
              swal({
                    text: 'Withdrawal Details Updated',
                    icon: 'success',
                    timer: 5000,
                    buttons: false,
                });
        @endif
         </script>
    </html>