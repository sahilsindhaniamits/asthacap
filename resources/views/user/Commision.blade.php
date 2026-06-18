<style>
html, body {
  height: 100%;
  margin: 0;
  background:#eef1f7;;
  overflow-x:hidden;
}
.label{
    height: 14%;
    width: 102.3%;
    z-index: 2;
    position: relative;
    display: flex;
    justify-content: flex-end;
}
 canvas {
    background-image: url('https://img.freepik.com/free-vector/gradient-stock-market-concept_23-2149215737.jpg?w=900&t=st=1681752109~exp=1681752709~hmac=b21865e59d77fcfdbc66769a30dae3ede9ad6c328591a4b647d1241dc36b2d8f');
    background-size: cover;
    background-repeat: no-repeat;
    position:relative;
    top:-20%;
  }
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}
.product_button:hover{
    background-color:#4287fc!important;
    color:#fff!important;
     border: 1px solid!important;
}
.graph{
    display:flex;
    width:90%;
    height:10%;
    background:#fff;
}

.grab{
    display:flex;
    flex-direction:column;
    height: 100%;
}
.title{
    display: flex;
    height: 13%;
    align-items: center;
    font-size: 13px;
    
}
.achievements{
    display:flex;
    flex-direction:column;
    /*background:#fff;*/
    height:100%;
    margin-left:3em;
    margin-right:3em;
   padding-left: 1em;
    width: 90%;
    border-radius: 19px;
    box-shadow:0.1rem 0.1rem 0.07rem 0.07rem rgb(51 51 51 / .1);
    
   
}
.achievement_cards
{
   display: flex;
    padding-left: 0em;
    padding-right: .7em;
    height: 100%!important;
    flex-wrap: wrap;
    gap: 0.5rem;
}
.grab-items{
   display: flex;
    flex-direction: column;
    background: #fff;
    border-radius:10px;
    align-items: center;
    justify-content: center;
    width: calc(51% - 0.5rem);
    height:25%;
    background:#fff1f1;
   box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
}
.bonus{
    display:flex;
    flex-direction:column;
    background:#fff;
    width:94%;
    margin: .7em;
    margin-top:5em;
    /*padding-left:1.5em;*/
    align-items:center;
    border-radius:1rem;
    box-shadow:0.1rem 0.2rem 0.4rem 0.2rem rgb(51 51 51 / .1);
   

}
.inner-content{
    display:flex;
    justify-content:space-between;
    padding-left:1em;
    padding-right:1em;
    align-items:1em;
}
.produc_box{
   display: flex;
   border-radius: 1.5rem;
   flex-direction: column;
    
    position: fixed;
    width: 32%;
    top: 50%;
    left: 45%;
    bottom: 50%;
    right: 50%;
    background: #fff;
    height: 26%;
}
.prodct_details{
    display:flex;
    flex-direction:column;
    align-items:space-between;
    margin-left:2em;
    font-size:12.5px;
    margin-top:0.5rem;
    border-bottom-left-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.product_image{
    display:flex;
    width:100%;
    height:30%!important;
    background:#eef1f7;
    border-top-left-radius: 1rem;
    border-bottom-left-radius: 1rem;
}
.popup-buttons{
   display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
    margin-top:-1em!important;
    height:60%!important;
}
.order_form{
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: 1em!important;
}
.grab_button{
    display: flex;
    width: 100%!important;
    height: 13%;
    margin-left: 1em;
    margin-top: 1%;
    margin-bottom: 1%;
   
}
.grab_automatic{
    background:#f7662f;
    color:#fff;
    border:none;
    height:45px!important;
    font-size:15px!important;
    border-radius:0.70rem;
    font-weight:bold;
    box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / .1);
    width: 48%;
    }
.card-title{
    font-size: 13px;
    
}
.grab_header{
    display:flex;
    justify-content:center;
    align-items:center;
    height:15%;
    width:100%;
    background:#ee4d2d;
    position: fixed;
    z-index: 99999;
}
.header_title{
    color:#fff;
    font-size:15px;
    font-weight:bold;
    
    
}
.card-data{
    color:rgb(222, 59, 42);
    font-weight:bold;
    
}
.level_details{
    display:flex;
    justify-content:center;
    align-items:center;
    height:18%;
    width:100%;
    background:aliceblue;
    font-size: 22px;
    position: relative;
    top: -14%;
    z-index: -2;
    border-top-left-radius: 1.5rem;
    border-top-right-radius:1.5rem;
}
.order_details{
    display:flex;
    flex-direction:column;
    margin-left:0.3em;
    margin-top:-2.5rem!important;
    align-items:flex-start;
    height:14%;
    width:90%;
    gap:0.4rem;
    background:#fff;
    font-size:13px;
}
    #myChart {
      position: relative;
}
.image_details{
    display:flex;
    flex-direction:column;
    width:100%;
    align-items:flex-start;
    padding-top:1em;
    padding-left:0.51em;
    font-size:14px;
    margin-right:0.5rem;
    
}
.image_card{
    display:flex;
    width:35%;
    height:60%;
    overflow:hidden;
    padding:0.6em!important;
    margin-top:0.5em;
    background:#fff;
    margin-left:1em;
    margin-right:0.5em;
    box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 20%);
    border-radius: 5%;
}
.image_values{
    display:flex;
    width:97%;
    justify-content:space-between;
    height:90%;
    align-items:center;
    
}
.product_name{
    display:flex;
    width:100%;
    height:32%!important;
    justify-content:flex-start;
    overflow:hidden;
}
.blue_line{
    display:flex;
    width:95%;
    height:0.4rem;
    background:#4287fc;
    margin-top:5%;
   
}
.product_button{
    background: #fff!important;
    color: #4287fc!important;
    border: none!important
    width:80px!important;
    height:30px!important;
    border-color: #4287fc!important;
     border: 1px solid!important;
    }
.action_buttons{
    display:flex;
    width:100%;
    height:50%;
    justify-content:space-between;
    margin-top:1em;

}
.generate_order{
    display: flex;
    justify-content: space-between;
    width: 76%!important;
    height: 13%;
}
.full{
    width:100%!important;
}
.label_image{
    width: 41%;
    height: 283%;
    margin-top: -2.5%;
}
@media (max-width: 767px) {
    .graph{
  position:relative;
  top:13.5%;
  padding-bottom:4.5%;
    width:96%;
    height:50%!important;
    background:#fff;
}
    canvas{
        height:60;
        border-radius:1rem;
    }
    .achievements{
    margin-left:0.7em!important;
    margin-right:1em!important;
     width: 90%!important;
     height:120%!important;
     background:white;
     margin-top: 3%;
     padding-bottom: 16rem;
     }
     .achievements_cards{
         height:100%!important;
     }
     .grab_header{
          height:8%!important;
     }
     .header_title{
         font-size:16px!important;
     }
    .grab_button{
   
    width:92%!important;
    height:10%!important;
    justify-content: space-between;
}
    .popup-buttons{
   display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.order_form{
    display: flex;
    justify-content: space-between;
    width: 84%!important;
    margin-left:1em;
    
    /*margin-top: 8em!important;*/
}

    .achievement_cards{
        padding-left:0em;
    }
    .produc_box{
        width:85%!important;
        height:50%!important;
        left: 17%!important;
        justify-content:space-evenly;
        margin-top:-10em!important;
        margin-left:-2.5em!important;
        box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 20%);
        z-index:99999999999999999!important;
        
    }
    .prodct_details {
        width:90%!important;
        justify-content:space-between!important;
        background:#fff;
        overflow:hidden!important;
    }
    .product_text{
        font-weight: bold!important;
    }
    .product_data{
        color:#ee0a24;
        margin-left:20
        padding-left: 10%0px!important;
    }
    .lvlgraph{
        line-height: 2px;
        margin-bottom: -.3rem;
        font-size: 17px;
        align-self: flex-start;
        padding-left: 1rem;
        font-weight:600;
    }
    .lvlgraph2{
        line-height: 2px;
        margin-bottom: -.3rem;
        font-size: 13px;
        align-self: flex-start;
        padding-left: 1rem;
    }
    .product_button{
    background: #fff!important;
    color: #4287fc!important;
    border: none!important
    width:30%!important;
    height:40px!important;
    border-color: #4287fc!important;
    font-size:16px;
    border: 1.5px solid!important;
    }
}
</style>
<html>
    <head>
        <head>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
    </head>
    </head>
    <body>
         <div id="popUp" style="display: none;
         z-index:999999999999999">
            
        <div class="produc_box">
            <div class="label"><img src="https://dokodemo.the20money.com/images/Label.png" class="label_image"></div>
             <div class="level_details">
                 Ozon
             </div>
             <div class="order_details">
                 <div class="deatils">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Time:&nbsp;2023-10-10 11-02-23</div>
                  <div class="deatils">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Number:&nbsp;#NASDRE1</div>
             </div>
            <div class="product_image">
            <div class="image_card">
               <a href="{{route('user.grab.page')}}"> <img src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103290827677.png" style="
               width: 100%;
                height: 100%;
                "></a></div>
                <div class="image_details">
                    <div class="image_heading">{{session('product')}}</div>
                    <div class="image_values">
                        <div class="price">2.00</div>
                         <div class="price">X1s</div>
                    </div>
                </div>
            </div>
           
            <div class="prodct_details">
                <div class="product_name">
                    <div>Product&nbsp;name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{session('product')}}</div>
                 </div>
              <div class="product_name">
                    <div>Product&nbsp;name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{session('product')}}</div>
                 </div>
                <div class="product_name">
                    <div class="order-value">Order&nbsp;Value:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                 </div>
                 <div class="blue_line"></div>
                  <div class="popup-buttons">
                <form id="myForm" action="{{route('user.earn')}}" method="POST" class="order_form">
                    @csrf
                    <input class="form-order-id" type="hidden" name="order_id" value="">
                    <input class="form-order-value" type="hidden" name="user_id" value="">
                    <input class="form-user-id" type="hidden" name="order_value" value="">
                    <div class="action_buttons">
                    <button type="submit" name="submit" value=0 class="product_button" style="width: 45%; box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
                    border-radius:2.5rem">Cancel</button>
                    <button type="submit" name="submit" value=1 class="product_button" style="width: 45%;box-shadow: 0.07rem 0.07rem 0.07rem 0.07rem rgb(51 51 51 / 10%);
                    border-radius:2.5rem">Submit</button>
                    </div>
                </form>
            </div>
            </div>
          </div>
        </div>
         @if(session('product'))
   
            <script>
       
        </script>
       
@endif
<header class="grab_header">
    <div class="header_title">Grab</div>
</header>
        <section class="grab">
            
            <div class="bonus">
                <div class="inner-content">
                    <!--<div class="level_name">OZON</div>-->
                    <!--<div class="level_commission">0.26%</div>-->
                  
                    
                </div>
                <div class=lvlgraph><p>SHIB</p></div>
                <div class=lvlgraph2><p>Exclusive channel for exclusive members</p></div>
                <div class="graph">
                    <canvas id="myChart" height="100"></canvas>
                    <!--<iframe width="260" height="200" src="https://motionarray.com/stock-motion-graphics/animated-forex-graph-963318" frameborder="0" allowfullscreen></iframe>-->
                </div>
            </div>
            <div class="grab_button">
               
                        <button type="submit" onclick="" class="grab_automatic"style="background:#fa9b03;">Deposit Grab</button>
                        <button type="button" id="my-button" class="grab_automatic">Automatic Grab</button>
                  
            </div>
            <div class="achievements">
                <div class="title">
                    <h3>Today's Achievements</h3>
                </div>
                <div class="achievement_cards">
                   <div class="grab-items">
                        <div class="card-title">Commission</div><br>
                        <div class="card-data">{{$commision}}</div>
                    </div>
                     <div class="grab-items">
                        <div class="card-title">available Balance</div><br>
                        <div class="card-data">{{$balance}}</div>
                    </div>
                     <div class="grab-items">
                        <div class="card-title">Order Completed</div><br>
                        <div class="card-data">{{$order_completed}}</div>
                    </div>
                     <div class="grab-items">
                        <div class="card-title">Cancelled</div><br>
                        <div class="card-data">{{$order_cancelled}}</div>
                    </div>
                     <div class="grab-items">
                        <div class="card-title">Yesterday's Commission</div><br>
                        <div class="card-data">{{$yseterday_commision}}</div>
                    </div>
                      <div class="grab-items">
                        <div class="card-title">Team Commission</div><br>
                        <div class="card-data">0.0</div>
                    </div>
                   <div class="grab-items full">
                        <div class="card-title">First Level Commision</div><br>
                        <div class="card-data">0.00</div>
                    </div>
                            <div class="grab-items full">
                        <div class="card-title">Second Level Commission</div><br>
                        <div class="card-data">0.00</div>
                    </div>
                    
                            <div class="grab-items full">
                        <div class="card-title">Third Level Commission</div><br>
                        <div class="card-data">0.00</div>
                    </div>
                    
                    
                </div>
           <div style="margin-top: 65px;
             width:200px;
             height:105px"></div>
        </section>
          
       
        @include('layouts.bottomTabs')
        
    </body>
    <script>
//         function showPopUp() {
//     document.getElementById("popUp").style.display = "block";
//     document.getElementById("myForm").submit();
// }

@if (session('order_cancel')){
    alert('{{session('order_cancel')}}')
}
@endif
</script>
    </script>
    <script>
    const CSRF_TOKEN = "{{csrf_token()}}"
</script>
<script>
var orderId;
// $(document).ready(function() {
//      $('#my-button').click(function() {
//      $('#popUp').show();
//      $.ajax({
//              headers: {
//                 'X-CSRF-TOKEN': CSRF_TOKEN
//             },
//             url: '{{route('user.order')}}',
//             type: 'POST',
//             dataType: 'json',
//             success: function(response) {
//             ordervalue = response.order_value;
//             orderId= response.order_id;
//             userId=response.user_id;
//             $('.order-value').text('Order Value:'+ordervalue);
//             $('.form-order-id').val(orderId);
//             $('.form-order-value').val(ordervalue);
//             $('.form-user-id').val(userId);
//         }
//     });
     
// });
//  });
</script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script>
         @if(session('order_limit'))
              swal({
                    text: 'Order Limit Exceeded',
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                });
        @endif
         </script>
         <script>
          var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [],
        datasets: [{
          
          borderColor: 'blue',
          data: [],
          borderColor: 'white',
          borderWidth:2,
          fill: true
        },
        {
         
          borderColor: 'blue',
          data: [],
          borderColor: 'orange',
          borderWidth: 4,
          fill: true
        }]
      },
      options: {
        animation: {
          duration: 0 // disable animations
        },
        scales: {
          x: {
            display: true, // hide x axis labels
          },
          y: {
            suggestedMax: 100, // set y axis max value
            suggestedMin: 0, // set y axis min value
            display: true // hide y axis labels
          }
        }
      }
    });
   // initialize chart interval variable
    function updateChart() {
      var data = chart.data.datasets[0].data;
      var label = chart.data.labels;
      var x = label.length === 0 ? 0 : label[label.length - 1] + 1; // get the last x value
      var y = Math.floor(Math.random() * 100); // generate a random y value between 0 and 100
      data.push(y);
      label.push(x);
      if (label.length > 30) { // limit the number of data points to 30
        data.shift();
        label.shift();
      }
      chart.update();
    }
   
    var button = document.getElementById('my-button');
    var chartInterval;
    button.addEventListener('click', function() {
          $('body').append('<div class="overlay"></div>');
     chartInterval = setInterval(updateChart, 150);
     setTimeout(function() {
     clearInterval(chartInterval); // stop chart updates
         $('#popUp').show();
        
     $.ajax({
             headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: '{{route('user.order')}}',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
            ordervalue = response.order_value;
            orderId= response.order_id;
            userId=response.user_id;
            $('.order-value').text('Order Value:'+ordervalue);
            $('.form-order-id').val(orderId);
            $('.form-order-value').val(ordervalue);
            $('.form-user-id').val(userId);
        }
    }); 
         },5000); // open popup after 3 seconds
});
  </script>
    <script>
//    

        
    </script>
</html>