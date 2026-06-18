<style>
  html, body {
  height: 100%;
  margin: 0;
  background:#eef1f7;
  overflow-x:hidden;
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
 .text{
     display:flex;
     width:100%;
     padding-left:1em;
     height:10%;
     background:#d9e5f9;
     align-items:center;
     font-size: 14px;
 }
 .main_section{
     display:flex;
     width:100%;
     height:60%;
     padding-left:1em;
     padding-right:1em;
      padding-top:1em;
     flex-wrap:wrap;
     gap:0.3em;
 }
 .card_online{
      display:flex;
      flex-direction:column;
      width:44%;
      height:32%;
      border-top-right-radius: 0.533333rem;
      border-bottom-right-radius: 0.533333rem;
      border-bottom-left-radius: 0.533333rem;
      background: #fff;
      overflow: hidden;
      box-shadow: 0.026667rem 0.026667rem 0.106667rem rgba(51,51,51,.3);
      align-items:center;
     
     
 }
  .cpmpany_conent{
     display:flex;
     flex-direction:column;
     width:100%;
     height:100%;
     padding-left:0.5em;
     padding-right:1.3em;
     padding-top:1.3em;
     gap:1rem
  }
  @media (max-width: 767px) {
     .personal_info{
         height:7%;
         box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
     }
     .card_online{
           width:46%;
           height:42%;
     }
     img{
         width:94%;
         height:25%;
         box-shadow:0.126667rem 0.126667rem 0.106667rem rgba(51,51,51,.22);
         border-radius:.5rem;
     }
     .card_head{
         flex:0 0 20%;
         display:flex;
         align-items:center;
         font-weight:bold;
         font-size:16px;
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
             <div class="head">Vip Events</div>
         </header>
          <section class="cpmpany_conent">
              <img src="https://dokodemo.the20money.com/images/banner_1.jpg">
             <img src="https://dokodemo.the20money.com/images/banner_2.jpg">
              <img src="https://dokodemo.the20money.com/images/banner_3.jpg">
                <img src="https://dokodemo.the20money.com/images/banner_4.jpg">
                  <img src="https://dokodemo.the20money.com/images/banner_5.jpg">
                    <img src="https://dokodemo.the20money.com/images/banner_6.jpg">
                      <img src="https://dokodemo.the20money.com/images/banner_7.jpg">
                       <img src="https://dokodemo.the20money.com/images/banner_8.jpg">
                        <img src="https://dokodemo.the20money.com/images/banner_9.jpg">
                         <img src="https://dokodemo.the20money.com/images/banner_10.jpg">
          </section>
</body>
</html>