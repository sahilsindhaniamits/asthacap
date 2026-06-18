<style>
html, body {
  height: 100%;
  margin: 0;
  background: aliceblue;
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
  .design-button{
    background: #4287fc;
    border-radius: 16%;
    border: none;
    width: 32%!important;
    height: 88%;
    color: #fff;
    border-radius:2.5rem;
    
}
.submit-button{
    margin-top:2em!important;
    height:10%!important;
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
     .add-money{
     display: flex;
    flex-direction: column;
     height: 100%;
}
.address-info{
        display:flex;
        flex-direction:column;
        justify-content:flex-start;
        background: #fff;
    margin: 12px;
     overflow: hidden;
     height: 80%;
     width:94%;
     border-radius: 1rem!important;
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
    .header-next{
    display: flex;
    padding-left: 10px;
    margin-top: -2em;
     padding-left: 1em;
    
}
.form-details{
   display: flex;
    /* align-items: center; */
    flex-direction: column;
    width: 100%;
    padding-left: 1em;
    font-size: 14px;
    font-weight:bold;
}
.form-items{
    display: flex;
    align-items: center;
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
.submit-button{
    display:flex;
    justify-content:center;
    align-items:center;
    height: 14%;
    
}
.design-button{
    background: #4287fc;
    border-radius: 16%;
    border: none;
    width: 29%;
    height: 84%;
    color: #fff;
    border-radius:2.5rem;
    font-size:12px;
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
        
       
<div class="team_header">
    
    <div class="back-buttion">
       <img src="https://pics.freeicons.io/uploads/icons/png/20148512211540882614-512.png">
    </div>
    <div class="header-title">
        <h4 class="heading">Withdrawal</h4>
    </div>
</div>
<section class="add-money">
    <div class="address-info">
        <div class="channel-name">
             
            <h3>Wihdrawal Amount:</h4>&nbsp;&nbsp;
            <p class="channel-ttile" style="font-size:13px">Handling fee 2.00%</p>
        </div>
    
    
     <form action="{{ route('wallet.withdraw-money') }}" method="POST"   style=" width: 100%;
">
    @csrf
     <input class="balance" type="text" placeholder="&nbsp;&nbsp;&nbsp;Enter Withdrawal Amount" name="amount" style="
    height: 4em;
    margin-left: .7em;
" required>
<div class="form-details">
    <div class="form-items">
        <h3>Balance:</h3>&nbsp;&nbsp;&nbsp;
        <span class="data-value">{{$balance}}</span>
    </div>
    <div class="form-items">
        <h3>Order Completed Today:</h3>&nbsp;&nbsp;&nbsp;
        <span class="data-value">100.00</span>
    </div>
    <div class="form-items">
        <h3>Number of withdrawal Today:</h3>&nbsp;&nbsp;&nbsp;
        <span class="data-value">100.00</span>
        </div>
    <div class="form-items" style="
    justify-content: space-between;
    width: 90%;
">
<label  for="dropdown"><h3>Select an address:</h3></label>&nbsp;&nbsp;&nbsp;
  <select name="user-address" id="dropdown">
      @foreach($user_address as $value)
    <option value="{{$value}}">{{$value}}</option>
    @endforeach
   
  </select>
  </div>
  </div>
  <div class="form-details" style="
    width: 90%;"
>
    <div class="form-items"  style="
    justify-content: space-between;
    overflow: hidden;
">
        <h3>Enter Withdrawal PIN:</h3>&nbsp;&nbsp;&nbsp;
       <input class="balance" type="text" placeholder="Enter Withdrawal Pin" name="amount" style="
    height: 4em;
    margin-left: 1em;
     width: 30%;
" required>
    </div>
    </div>
    <div class="submit-button">
    <button type="submit" class="design-button"><h3>Confirm<h3></h3></button>
</div>
</div>
</div>
</section>
 @include('layouts.bottomTabs')
</body>
</html>