<style>
  html, body {
      box-sizing: border-box;
        margin: 0;
        padding: 0;
  
 } 
 .main{
     display:flex;
     flex-direction:column;
     background:#fff;
   

 }
 .app{
     display:flex;
     flex-direction:column;
     width:100%;
     align-items:flex-end;
 }
 .details{
     display: flex;
    width: 93%;
    justify-content: space-between;
    margin-top: 169px;
    padding-left: 20px;
 }
  .info{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    font-weight: bold;
    font-size: 14px;
    gap:4px;
     
  }
  .company_info{
    display: flex;
    flex-direction: column;
      
  }
  .main_content{
     display: flex;
     flex-direction: column;
    
     width:100%;
     padding-left:10px;
     margin-top:170px;
      
  }
  .letter_head{
      display:flex;
      justify-content:space-between;
      margin-top:10px;
  }
  .downline{
     position: relative;
    bottom: -30px;
    width: 100%;
  }
  
  .upline{
       position: relative;
    top: -30px;
    width: 100%;
      
  }
  .verfification{
 margin-top: 10px;
    display: flex;
    width: 91%;
    justify-content: space-between;
    padding-left: 20px;
    padding-bottom: 90px;
  }
  .box{
     width: 300px;
    height: 107px;
    border-style: solid;
    border-color: #28b588
  }
  .gst_details{
     display: flex;
    flex-direction: column;
   
    align-items: flex-end;
   
    margin-top: -194px;
    width:98%;
  }
  .gst_details div {
      font-weight:bold;
      font-size:13px;
  }
  .button{
      display:flex;
      background:#fff;
  }
  .terms{
      font-size:14px;
      margin-top:-21px;
      
  }
 </style>
 <html>
    
     
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
       </head>
        <body>
          <a href="javascript:window.print();"  style="
    z-index: 100000;
    position: relative;
">Print</a>
            <section class="main">
                <img src="{{ asset('template/img/headd2.jpg') }}" class="upline" style="width: 100%;
    height: 200px;
    object-fit: contain;">
    
    <div class="gst_details">
        <div>GSTIN : 08BFAPJ4466F1ZJ</div>
        
    </div>
            <!--<div class="app">-->
            <!--    <div>GSTIN:</div>-->
            <!--    <div>GSTIN:</div>-->
            <!--    <div>GSTIN:</div>-->
            <!--</div>-->
           
            <div class="company_info">
                 </div>
                
            </div>
        <div class="main_content">
            <div style="
   text-decoration: underline;
    align-self: center;
    font-weight: bolder;
    margin-bottom:22px;
    
">SANCTION LETTER</div>
<div class="info">
                    <div><span>APPLICATION NUMBER: {{ $obj->lead_token }}</span></div>
                    <div><span>MR./MISS: {{ $obj->applicant_name }}</span></div>
                    <div><span>S/O: {{ $obj->father_name }} </span></div>
                    <div><span>CONTACT NO: {{ $obj->mobile }}</span></div>
                    <div><span>SUBJECT: - Your  application for <b style="color:#28b588">{{ $obj->loan_type }}</b> from <b style="color:#28b588">AMBE FINANCE</b></span></div>
                    <div><span>SANCTIONED AMOUNT:  {{ $obj->sanctioned_amount }} INR.</span></div>
                    <div><span>APPLICATION DATE :  {{ $obj->new_format }}</span></div>
                    </div>
            
 <div class="letter_head">
            <div style="
    line-height: 23px;
"><span>Dear Sir/Mam,</span></div>
             
    </div>
        <div>
           As per Terms & Conditions we request to you please submit your two EMI <b style="color:#28b588; font-size:18px">{{ $obj->emi }}</b> <b>+</b> <b style="color:#28b588;font-size:18px">{{ $obj->emi_amount }}</b> Rs in advance. We have in-Principle sanctioned you a loan facility.
        </div>
        <div style="
    margin-top: 10px;
    color: #28b588;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 15px;
    font-family: system-ui;
">
        ACCOUNT HOLDER NAME:  <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $obj->payee_name }}</span><br>
        ACCOUNT TYPE: <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVINGS</span><br>
        BANK NAME: <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $obj->bank_number }}</span><br>
        ACCOUNT NUMBER: <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $obj->account_number }}</span><br>
        IFSC CODE: <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $obj->ifsc }}</span><br>
        SANCTION LETTER VALIDITY: <span class="red-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10 DAYS</span><br>
        </div>
         <div class= "terms">
          <h5 style="margin-bottom: 3px;">Primary terms and conditions to be fulfilled by the applicant</h5>
          <small>*Repayment of loan will be on monthly installment bases along with interest.</small><br>
           <small>*Legal charges, file charges and expenditure regarding property verification, mortgage deed, and all such expenditures will be borne by the applicant all these charges are non-refundable.</small><br>
            <small>*In case of an outstanding EMI, late charges of 2%per day will be levied.</small><br>
             <small>*All documentation must be submitted with in 15days counted from the date of the issue of approval letter or the company will cancel the loan file.</small><br>
                         <small>*Loan is sanctioned up to maximum 70%of the current market value of the mortgage.</small>
             <small>*Company may also suspend services on the web loan or cancel the request for aby customer.</small>
             <small>**Returned, disputed or unauthorized/fraudulent transactions will not be considered from the customers. All disputes to be scheduled with Rajasthan court jurisdiction only.</small>
        </div><br>
        <b>Declaration: I accept & read the loan terms & conditions</b>
          <div class="verfification">
                <div class="box"><p style="margin-top: 45%;">Declaration: I accept & read the loan terms & conditions </p></div>
                   <div class="stamp_image" style="
    width: 2%;
    display: flex;
    justify-content: space-between;
    align-items: center;
   
    flex-direction: column;
"> 

                <div></div>
                
                </div>
<div class="box"><p style="margin-top: 45%;">Applicant Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE:</p></div>                
                  <div class="stamp_image" style="
    width: 18%;
    display: flex;
    justify-content: space-between;
  
   
"> 
              
                
            </div>
          
        </div>
       <img style="height: 10rem; width: 40rem; opacity: 10%; align-self: center;margin-top: -35rem;"src="{{ asset('template/img/finance.png') }}">
        <div style="position: relative;
    
    bottom: -375px ">
                <img style="object-fit: ;
    width: 100%;
    height: 100px " src="{{ asset('template/img/bot.jpg') }}">
            </div>
              
        
        
            </section>
            
            
        </body>
    </html>
    <script>
function printPage() {
  window.print();
}
</script>
