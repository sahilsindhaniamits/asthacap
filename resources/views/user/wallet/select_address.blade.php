<style>
html, body {
  height: 100%;
  margin: 0;
  background: #eef1f7;
}
.main_body{
    display:flex;
    flex-direction:column;
    width:93%;
    height:90%;
    gap:.6rem;
    padding-top: 5%;
    
    
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
          .header-title{
        flex: 1 0 80%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .methods{
        display:flex;
        justify-content:space-between;
        align-items:center;
        width:97.8%;
        height:8%;
        background:#fff;
        border-radius:9px;
        margin-left:.5em;
        padding-left:1em;
    }
    .button{
        display:flex;
        width:100%;
        height:12%;
        justify-content:center;
        align-items:center;
    }
    .next{
        color:#fff;
        font-weight:bold;
        font-size:18px;
        background-color:#1989fa;
        border: 0.026667rem solid #1989fa;
        border-radius: 26.64rem;
        width:30%;
        height:65%;
        margin-left:1.5em;
    }
@media (max-width: 800px) {
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
        <h4 class="heading">TOP-UP Method</h4>
    </div>
</div>
<section class="main_body">
    <div class="methods">
        <div class="name"><b>USDT-TRC</b>&nbsp;&nbsp;&nbsp;&nbsp;(Auto-deposit)</div>
         <div class="name"><input type="radio" checked></div>
    </div>
     <div class="methods">
        <div class="name"><b>USDT</b>&nbsp;&nbsp;&nbsp;TRC</div>
         <div class="name"><input type="radio"></div>
    </div>
     <div class="methods">
        <div class="name"><b>USDT</b>&nbsp;&nbsp;&nbsp;ERC</div>
         <div class="name"><input type="radio"></div>
    </div>
    <div class="button">
        <button type="button" onclick="window.location.href='{{route('wallet.add-money')}}'" class="next">Next</button>
    </div>
    
</section>
        </body>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.main_body input[type="radio"]').click(function() {
            $('.main_body input[type="radio"]').not(this).prop('checked', false);
        });
    });
</script>
</html>