<style>
  html, body {
  height: 100%;
  margin: 0;
   background:#eef1f7;
   overflow-x:hidden;
  
 } 
 .background{
    position: relative;
    width: 120%;
    height: 12.866667rem;
    left: -19%;
    top: -9%;
    background:#ee4d2d;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 55%;
    z-index: 1;
 }
 .main_order{
     display:flex;
     flex-direction:column;
     width:100%;
     height:100%;
     z-index: 999;
    position: relative;
    top: -56%;
    left: 14%;
     }
     .order_stats{
         display:flex;
         flex-direction:column;
         width:60%;
         height:30%;
         margin-left:1em;
         margin-right:1em;
         justify-content:center;
         align-items:center;
         background:#fff;
         box-shadow: 0 3px 8px rgb(31 29 24 / 14%);
         border-radius:.5rem;
         
     }
     .head{
         color:#ee4d2d;
         font-size:17px;
         
     }
     .order_status{
         display:flex;
         flex-direction:column;
         width:100%;
         height:50%;
       
     }
     .tab-links{
        display:flex;
        width:90%;
        height:15%;
        background:#fff;
        justify-content:space-evenly;
        align-items:center;
        padding-top: 1rem;
        padding-bottom: 1rem;
     }
     .child_tabs{
         width:33%;
     }
     ul{
         list-style:none;
     }
     .tab-content{
         display:flex;
         flex-direction:column;
         gap:1rem;
         width:100%;
         height:100%;
     }
     .tab-links a {
  color:#bec7d6;;
  text-decoration: none; /* remove underline */
  font-size:18px;
  
     }
     .popup_box{
         display:flex;
         flex-direction:column;
         width:92%;
         height:45%;
         background:#fff;
         margin-left:1rem;
         box-shadow:0 3px 8px rgb(31 29 24 / 14%);
         border-radius:.4rem;
        
         }
         .level_details{
             display:flex;
             width:100%;
             height:20%;
             justify-content:center;
             align-items:center;
              }
              .order_values{
                  display:flex;
                  width:100%;
                  height:20%;
                  
              }
              .image_card{
                  flex:0 0 30%;
                  height:75%;
                  padding-left:1em
              }
              .product_image{
                  height:200%;
                  width:55%;
              }
              .product_details{
                  display:flex;
                  flex-direction:column;
                  width:100%;
                  padding-left:1em;
                  padding-right:1em;
                  margin-top:2em;
                }
                .product_data{
                    display:flex;
                    width:90%;
                    height:100%;
                    justify-content:space-between;
                    align-items:center;
                }
 @media (max-width: 800px) {
     .main_order{
             top: -24%;
             left: 10%;
             z-index: 999!important;
             position: relative;
     }
      .order_stats{
           width:75%;
           height:20%!important;
      }
       .order_status{
           margin-left:-10%;
       }
 }
 </style>
 <html>
    <body>
        <head>
            <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <div class="background"></div>
    <section class="main_order">
        <div class="order_stats">
            <p class="head"> Total Orders</p>
            <p class="head">{{count($orders)}}</p>
        </div>
        <div class="order_status">
            <ul class="tab-links">
    <li class="child_tabs"><a href="#tab1">All</a></li>
    <li class="child_tabs"><a href="#tab2">Pending</a></li>
    <li class="child_tabs"><a href="#tab3">Completed</a></li>
  </ul>
  <div id="tab1" class="tab-content">
     
      @foreach($orders as $index=> $value)
      <div class="popup_box">
          <div class="level_details">Ozon</div>
          <div class="order_values">
              <div class="image_card">
                  <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103290827677.png" class="product_image">
              </div>
              
    <span>Order Value {{($value['order_value'])}}</span>
          </div>
          <div class="product_details">
              <div class="product_data">
                  <span class="title">prdocut name</span>
                  <span class="datas">bitcoin</span>
              </div>
                <div class="product_data">
                  <span class="title">product price</span>
                  <span class="datas">200</span>
              </div>
          </div>
      </div>
      @endforeach
  </div>
  <div id="tab2" class="tab-content">
       @foreach($pending as $index=> $value)
      <div class="popup_box">
          <div class="level_details">Ozon</div>
          <div class="order_values">
              <div class="image_card">
                  <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103290827677.png" class="product_image">
              </div>
              
    <span>Order Value {{($value['order_value'])}}</span>
          </div>
          <div class="product_details">
              <div class="product_data">
                  <span class="title">prdocut name</span>
                  <span class="datas">bitcoin</span>
              </div>
                <div class="product_data">
                  <span class="title">product price</span>
                  <span class="datas">200</span>
              </div>
          </div>
      </div>
      @endforeach
      </div>
  <div id="tab3" class="tab-content">
         @foreach($completed as $index=> $value)
      <div class="popup_box">
          <div class="level_details">Ozon</div>
          <div class="order_values">
              <div class="image_card">
                  <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103290827677.png" class="product_image">
              </div>
              
    <span>Order Value {{($value['order_value'])}}</span>
          </div>
          <div class="product_details">
              <div class="product_data">
                  <span class="title">prdocut name</span>
                  <span class="datas">bitcoin</span>
              </div>
                <div class="product_data">
                  <span class="title">product price</span>
                  <span class="datas">200</span>
              </div>
          </div>
      </div>
      @endforeach
  </div>
        </div>
    </section>
    @include('layouts.bottomTabs')
  </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
  // Hide all tab content except for the first one
  $('.tab-content').not(':first').hide();

  // When a tab link is clicked, show its corresponding content and hide the others
  $('.tab-links a').click(function() {
    var tabId = $(this).attr('href');
    $('.tab-content').hide();
    $(tabId).show();
    return false;
  });
});
  </script>
  </html>
        