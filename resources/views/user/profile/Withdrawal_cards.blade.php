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
     margin-top: 27px;
     margin-left: 75px;
    
}
.withdrawal_card{
    background:url(https://onit168.net/img/bnck_bg_1.0b601914.png) 0% 0% / 100% 100% no-repeat;
    display:flex;
    flex-direction:column;
    width:68%;
    height:24%;
    padding-left:2em;
    
}
.title{
    height:2em;
    width:100%;
    color:#fff;
    font-size:15px;
}
.address{
    display:flex;
    flex-direction:row;
    width:100%;
    justify-content:center;
    align-items:center;
    color:#fff;
    font-size:14px;
    }
   .submit_button
   {
       display:flex;
       width:100%;
       height:30%;
       justify-content:center;
       align-items:center;
   }
   .button{
       background-color:#ee4d2d;;
       color:#fff;
       font-weight:bold;
       font-size:17px;
       border: none;
       width: 43%;
       height: 30%;
       border-radius: 2.8rem;
   }
   #icon{
     color: rgb(255, 255, 255);
    font-size: 20px;
    left: 413;
    position: relative;
    top: -39px;
   }
   .delete_button{
       position:relative;
       width:30px;
       height:30px;
       left: 613px;
       top: 106px;
}
  @media (max-width: 800px) {
        .personal_info{
         height:7%;
         box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
     }
      .info_section{
           margin-left: 4.5%!important;
           width:96%!important;
           height:100%!important;
           margin-top: 15px!important;
           padding-top:1em!important;
           padding-left:0em!important;
           gap:1.5rem;
           
    }
     .withdrawal_card{
    width:85%!important;
    height:14%;
     }
      .button{
       width: 63%;
       height: 30%;
       border-radius: 2.8rem;
       margin-left: -10px!important;
      }
      .submit_button{
          padding-left:-7em!important;
      }
        #icon{
     color: rgb(255, 255, 255);
    font-size: 22px;
    left: 89%!important;
    position: relative;
    top: -50%!important;
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
             <div class="head">Withdraw Cards</div>
         </header>
           <section class="info_section" style="margin-top:-29px">
               <form class="info_section">
                   @foreach($tmp as $index=>$data)
               <div class="withdrawal_card">
                   <p class="title">{{$data['type']}}</p>
                   <div class="address">{{$data['address']}} </div>
                   <input type="hidden" name="id" class="card_id" value="{{$data['id']}}">
                <i class="fa fa-trash" id="icon" aria-hidden="true"></i>
                
               </div>
               @endforeach
              <div class="submit_button">
                  <button class="button">Add Withdrawal Method</button>
              </div>
            </form>
           </section>
         </body>
         <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script> const CSRF_TOKEN ="{{csrf_token()}}" </script>
         <script>
         
             $(document).on('click','#icon',function() {
  var id = $('input.card_id').val();
   
             
            $.ajax({
                 headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
                url: '{{route('user.delete_card')}}',
                type: 'POST',
                data: {
                    'id': id
                  },
                success: function() {
                    swal({
                        title: 'Deleted!',
                        text: 'The has been deleted.',
                        icon: 'success'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    swal({
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        icon: 'error'
                    });
                }
            });
        
    
});

         </script>
         </html>
 