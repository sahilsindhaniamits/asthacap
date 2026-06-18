<style>
.footer{
    display:flex;
    justify-content:space-around;
    align-items:center;
    position:fixed;
    bottom: -1%;
    width:100%;
    background: #fff;
    height: 9.5%;
    z-index:9999;
    font-size: 12px;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
}
.footer-text{
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 11px;
}
a {
  color: #bec7d6;
    text-decoration: none;
}
 .icons{
     font-size: 19px;
     font-size: 22px;
     margin-bottom:-.3rem;
 }
 .footer-image{
     height:46%;
     width:87%;
     }
.footer-items{
    display:flex;
    width:10%;
    height:80%;
    flex-direction:column;
    justify-content:center;
    padding-left:0.3%!important;
    gap:0.2rem!important;
}
@media (max-width: 800px) {
    .footer-items{
         padding-left:5%!important;
         margin-top: -.5em;
    }
     .footer-image{
     height:36%!important;
     width:54%!important;
     margin-bottom:-.7em;
     
     }
.footer_image{
    position:absolute;
    height: 97%!important;
    width: 60px!important;
   top:-23%;
   left:43%;
}
}
</style>
<head> <meta name="viewport" content="width=device-width, initial-scale=1.0">\
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /></head>
<footer class="footer">
    <div class="footer-items">
        <a href="{{route('home')}}">
        <p><img src="https://dokodemo.the20money.com/images/home_footer.png" class="footer-image" style="margin-left:.2em"></p>
        <p><span class="footer-text">home</span></p></a>
        
    </div>
     <div class="footer-items">
        <a href="{{route('user.allorders')}}">
             <p><img src="https://dokodemo.the20money.com/images/order_footer.png" class="footer-image"style="margin-left:.5em"></p>
        <p><span class="footer-text">Orders</span></p>
        </a>
    </div>
     <div class="footer-items">
    <div class="grab-image">
                <a href="{{route('user.grab.page')}}"><img data-v-6d2e4fa9="" src="https://khutso.com/img/grab_icon.89884bc1.png" alt="" style="margin-bottom: 76px;" class="footer_image"></a>
        </div>
       
    </div>
     <div class="footer-items">
          <a href="{{route('online')}}">
         <p><img src="https://dokodemo.the20money.com/images/online_footer.png" class="footer-image" style="margin-left:.5em"></p>
        <p><span class="footer-text">Online</span></p>
       </a>
    </div>
      <div class="footer-items">
           <a href="{{route('user.dashboard.home')}}">
       <p><img src="https://dokodemo.the20money.com/images/user_footer.png" class="footer-image" style="margin-left:-.2em"></p>
        <p><span class="footer-text">My</span></p>
       </a>
    </div>
</footer>