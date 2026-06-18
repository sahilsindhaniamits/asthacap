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
    font-size: 16px;
 }
 .text{
     display:flex;
     width:100%;
     padding-left:1em;
     height:10%;
     background:#d9e5f9;
     align-items:center;
     font-size: 14px;
     font-weight: lighter;
     margin-top:.2em;
 }
 .main_section{
     display:flex;
     width:98%;
     height:43%;
     padding-left:1em;
     padding-right:1em;
      padding-top:1em;
     flex-wrap:wrap;
     gap:0.7em;
 }
 .card_online{
      display:flex;
      flex-direction:column;
      width:44%;
      height:60%;
      border-top-right-radius: 1.3rem;
      border-bottom-right-radius: 1.3rem;
      border-bottom-left-radius: 1.3rem;
      background: #fff;
      overflow: hidden;
      box-shadow: 0.126667rem 0.126667rem .206667rem rgba(51,51,51,.2);
      align-items:center;
     
     
 }
  @media (max-width: 767px) {
     .personal_info{
         height:7%;
         box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
     }
     .card_online{
           width:46%;
           height:45%;
     }
     img{
         width:100%;
         height:90%;
     }
     .card_head{
         flex:0 0 20%;
         display:flex;
         align-items:center;
         font-weight:bold;
         font-size:14px;
     }
  }
 </style>
 </html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 </head>
 <body>
      <header class="personal_info">
             <div class="head">Customer Service</div>
         </header>
         <div class="text">If you have any questions or encounter issues, please email us or &nbsp;chat with our online customer support team</div>
         <section class="main_section">
             <div class="card_online">
                 <div class="card_head">
                     Deposit/Withdraw Service
             </div>
                  <div class="card_image">
                      <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202209091540281543173.jpg" class="card_images">
                </div>
             </div>
              <div class="card_online">
                 <div class="card_head">
                     Reward and Online Service
             </div>
                  <div class="card_image">
                      <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202209091559417050701.jpg" class="card_images">
                </div>
             </div>
              <div class="card_online">
                 <div class="card_head">
                     Telegarm Official Channel
             </div>
                  <div class="card_image">
                      <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202301280825045030588.jpg" class="card_images">
                </div>
             </div>
              <div class="card_online">
                 <div class="card_head">
                     Money Exchange
             </div>
                  <div class="card_image">
                      <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202302240959539242861.png" class="card_images">
                </div>
             </div>
         </section>
         @include('layouts.bottomTabs')
 </body>
 </html>
     
 