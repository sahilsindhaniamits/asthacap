<style>
html, body {
  height: 100%;
  margin: 0;
  background: aliceblue;
}
.dropzone{
    border: 3px dotted lightgray;
    display: flex;
    width: 70%;
    height: 100%;
    justify-content: center;
}
.screenshot_upload{
    display:flex;
    justify-content:center;
    align-items:center;
}
.submit_button{
    display:flex;
    justify-content:center;
    align-content:center;
    margin-top: 1em;
}

.alert_box{
    display:flex;
    position: fixed;
    top: 45%;
    left: 50%;
    width: 8.533333rem;
    overflow: hidden;
    font-size: .426667rem;
    background-color: #fff;
    border-radius: 0.426667rem;
}
.deposit-address{
    display: flex;
     justify-content: flex-start; 
    align-content: center;
    margin: 1em;
    
}
@media (max-width: 800px) {
   .address-info{
        height:80%;
        display:flex;
    }
    input {
    height: 30px;
    padding: 5px;
  }
  .screenshot_upload{
      margin-top:2em;
  }
  
  .copy-button{
    background: #4287fc;
  
    
    font-size:10px;
    width: 20%!important;
    height: 89%;
    color: #fff;
   
}
.button-design{
      background: #4287fc;
    border-radius: 30%!important;
    border: none;
    width: 8rem!important;
    height: 3rem!important;
    color: #fff;
    border-radius:2.5rem!important;
}
    
}
input{
    height: 4em;
    margin-left: 1em;
}

 .team_header{
        display:flex;
        align-items:center;
         width: 100%;
        height:69px;
         box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        justify-content:center;
        background: #fffe;
    }
     .back-button{
        flex: 0 0 20%;
    }
      .header-title{
        flex: 1 0 80%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .address-info{
        display:flex;
        flex-direction:column;
        justify-content:flex-start;
        background: #fff;
    margin: 12px;
     overflow: auto;
     height: 100%;
     width: 94%;
     border-radius:1rem!important;
     box-shadow:0.026667rem 0.026667rem 0.106667rem rgba(51,51,51,30%);
    }
    .channel-name{
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items: center;
       padding-left: 1em;
    }
    .channel-ttile{
        color: #ee0a24;
    }
    .add-money{
     display: flex;
    flex-direction: column;
     height: 100%;
}
.header-next{
    display: flex;
    padding-left: 10px;
    margin-top: -2em;
     padding-left: 1em;
    
}
.b-address{
    display: flex;
    /* justify-content: space-between; */
    width: 80%;
    padding-left: 3em;
    padding-top: 1em;
    box-shadow: 0 4px 4px rgb(0 0 0 / 4%);
    align-items: center;
}
.add-money-input{
    display:flex;
    justify-content:flex-start;
    align-items:center;
    background:#fff;
    margin:15px;
    border-radius: 0.16rem;
    box-shadow: 0 0.053333rem 0.08rem #d3dded;
    height: 45%;
}
.balance{
    display: block;
    box-sizing: border-box;
    width: 96%;
    min-width: 0;
    margin: 0;
    padding: 0;
    color: #323233;
    line-height: inherit;
    text-align: left;
    background-color: transparent;
    border: 0;
    resize: none;
    background: #eff3fe;
     height: 340%;
}
.button-design{
      background: #4287fc;
    border-radius: 60%;
    border: none;
    width: 9%;
    height: 59%;
    color: #fff;
}
.input{
    display: flex;
    width: 100%;
   
}
.copy-button{
    background: #4287fc;
    border-radius: 2.5rem;
    border: none;
    width: 9%;
    height: 50%;
    color: #fff;
}
}
.enter-amount{
    display: flex;
    height: 21%;
    width: 90%;
    padding-left: 1em;
}
.heading_n{
    font-size:12px;
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
    <body>
        
        <div class="alert_box" style="display:none;z-index:9999">
            <div class="message_content">
              
                <div class="message_text">
                    Transaction id already exists
                </div>
            </div>
        </div>
<div class="team_header">
    
    <div class="back-buttion">
       <img src="https://pics.freeicons.io/uploads/icons/png/20148512211540882614-512.png">
    </div>
    <div class="header-title">
        <h4 class="heading">USDT-TRC20</h4>
    </div>
</div>
<section class="add-money">
    <div class="address-info">
        <div class="channel-name">
             
            <h4>Transfer Channel</h4>&nbsp;&nbsp;
            <p class="channel-ttile">USDT</p>
        </div>
    <div class="header-next">
        <h4 class="heading">USDT-Top Up</h4>
    </div>
    
     <form action="{{ route('wallet.add-money') }}" method="POST"   style=" width: 100%;
">
    @csrf
     <input class="balance" type="text" placeholder="&nbsp;&nbsp;&nbsp;*Please input the number of USDT to be traded(25-50000)" name="amount" style="
    height: 4em;
    margin-left: .7em;
" required>
  
    
     <div class="channel-name">
            <h4>Deposit Address</h4>
         </div>
        <div class="header-next">
            <div class="b-address">
       <h4 class="heading">T12x45678f6689</h4>&nbsp;
        <button class="copy-button">Copy</button>
        </div>
    </div>
     <div class="header-next" style="
    margin-top: 0.2em;
">
        <h4 class="heading">Transaction TXID or Transaction HASH</h4><br>
       
    </div>
    <p style="
    margin-top: -1em;
    margin-left: 1em;
"> <span class="heading_n">Note:</span><span class="red-text" style="
    color: #ee0a24;
    font-size:13px;
">&nbsp;&nbsp;&nbsp;&nbsp;(It is forbidden to use the TXID or HASH of other users, and the account will be frozen if found)</span></p>
     
    
     <input class="balance" type="text" placeholder="&nbsp;&nbsp;&nbsp;*Fill in transaction TXID or transaction HASH" name="transaction_id" style="
    height: 4em;
    margin-left: .7em;
" required> 
<div class="screenshot_upload">
 <input type="hidden" class="image" name="image">
                        <div class="dropzone  dropzone-file-area" >
                            <div class="dz-default dz-message">
                                <h3 class="sbold">Drop Images here to upload</h3>
                                <span>You can also click to open phone gallery</span>
                            </div>
                        </div>
</div>
<div class="submit_button">
    <button type="submit" class="button-design"style="font-size:14px">Confirm</button>
    </div>
</form>
    
      </div>
      
   
    
   
    
    
    
    
</section>
@include('layouts.bottomTabs')
    </body>
    


<script>
    const CSRF_TOKEN = '{{ csrf_token() }}';
</script>
<script>
    var images = new Dropzone(".dropzone", {
        url: "{{ route('admin.storage.upload', ['screenshot']) }}",
        autoProcessQueue: true,
        uploadMultiple: true,
        maxFilesize: 5,
        maxFiles: 3,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        autoDiscover:false
    });
    images.on("sending", function(file, xhr, formData) {
        formData.append("_token", CSRF_TOKEN);
    });
    images.on("success", function(file, response) {
        if (response.status)
            $('.image').val(response.url)
    });
</script>

    <script>
    
       @if(isset($popupMessage))
       $(document).ready(function() {
       alert('{{"$popupMessage"}}')
       });
    </script>
@endif
    
</html>