<style>
html, body {
  height: 100%;
  margin: 0;
  background:#eef1f7;
  overflow:hidden;
  
}
.header_title{
    color:#fff;
    font-size:15px;
    font-weight:bold;
    text-align:center;
    z-index: 99999;
    position: relative;
    margin-top:1rem;
}
.invite_info{
    display:flex;
    flex-direction:column;
    align-items:center;
    width:100%;
    height:100%;
    margin-top: .5em;
}
.invite{
   display: flex;
    flex-direction: column;
    width: 62%;
    height: 60%;
    background: #fff;
    margin:20px;
    margin-top:-7em;
    position:fixed;
    z-index:99999;
    border-radius:1rem;
    box-shadow:0.126667rem 0.126667rem 0.106667rem rgba(51,51,51,.2);
  
}
.code{
    display:flex;
    width:100%;
    height:100%;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    gap:1rem;
    font-weight:bold!important;
    font-size:15px;
}
.backgroundinv2{
     display:flex;
     width:20%;
     height:30%;
     margin-top:1em;
     margin-left: 1em;
     position: relative;
}
.copy{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    height: 28%;
}
.backgroundinv{
     display:flex;
     width:100%;
     height:100%;
     flex-direction:column;
     align-items:center;
     margin-top:-26rem;
     position:fixed;
     }
.copy_button{
    width: 80px;
    height: 38px;
    border-radius: 21px;
    color: #fff;
    background-color: #ff362e!important;
    font-weight:bold;
    font-size:15px;
    box-shadow: 0.056667rem 0.056667rem 0.106667rem rgba(51,51,51,.2)
}
 .link{
          word-wrap: break-word!important;
     }
     
@media (max-width: 800px) {
    .barcode{
        height:100%!important;
        width:50%;
    }
     .grab_header{
          height:8%!important;
     }
      .header_title{
         font-size:16px!important;
     }
     .invite{
   
    width: 92%!important;
    height: 60%!important;
    padding-bottom:1em;
    padding-top:1em;
     }
     .link{
         font-size:15px!important;
         display:flex;
         flex-wrap:wrap;
         padding-left:2em;
         padding-right:2em;
         width:100%;
         place-content:center;
         margin-top:.5rem;
         
     }
}
</style>
<html>
    
        <head>
           
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
    </head>
    </head>
    <body>
        <div class="header_title">Promotion Reward</div>
        <div class="backgroundinv">
    <img src=https://onit168.net/img/invite_bg.2293e5df.png>
    </div>
    <div class="backgroundinv2">
    <img src=https://onit168.net/img/invite_reward.e87a7295.png>
    </div>
    
</header>
<section class="invite">
<div class="invite_info">
     <div class="code">
        <img src="https://dokodemo.the20money.com/images/barcode.jpg" class="barcode">
       
</div>
    <div class="code">
        <div class="link">Invitation Code:<span id="code_copy">{{$i_code}}</span></div>
        <div class="copy"><button class="copy_button" id="copy-button">Copy</button></div>
</div>
 <div class="code">
        <div class="link">Invitation Link:<span id="link_copy">{{ url('/') }}/register?code={{ auth()->user()->referral_code }}</span></div>
        <div class="copy"><button class="copy_button" id="link_button">Copy</button></div>
</div>
  
</div>
</section>
 @include('layouts.bottomTabs')
        </body>
        <script>
            $(document).ready(function() {
  $('#copy-button').click(function() {
    // Get the text to copy
    var textToCopy = $('#code_copy').text();

    // Create a temporary input element to copy the text
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(textToCopy).select();

    // Copy the text to the clipboard
    document.execCommand('copy');

    // Remove the temporary input element
    tempInput.remove();
     alert('code copied');
  });
});

</script>
<script>
            $(document).ready(function() {
  $('#link_button').click(function() {
    // Get the text to copy
    var textToCopy = $('#link_copy').text();

    // Create a temporary input element to copy the text
    var tempInput = $('<input>');
    $('body').append(tempInput);
    tempInput.val(textToCopy).select();

    // Copy the text to the clipboard
    document.execCommand('copy');

    // Remove the temporary input element
    tempInput.remove();
     alert('link copied');
  });
});

</script>
</html>
