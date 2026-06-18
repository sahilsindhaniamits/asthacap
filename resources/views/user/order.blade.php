<style>
html, body {
  height: 100%;
  margin: 0;
  background: aliceblue;
}
.grab_header{
    display:flex;
    justify-content:center;
    align-items:center;
    height:20%;
    width:100%;
    background:#ff362e;
    position: fixed;
    z-index: 99999;
}
.header_title{
    color:#fff;
    font-size:15px;
    font-weight:bold;
    
}
.user_order{
    display:flex;
    flex-direction:column;
    width:100%;
    height:100%;
}
.tab{
    display:flex;
    width:100%;
    justify-content:space-between;
    align-items:center;
}

@media (max-width: 800px) {
    .grab_header{
          height:10%!important;
     }
     .header_title{
         font-size:25px!important;
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
   <header class="grab_header">
    <div class="header_title">Order</div>
    </header>
    <section class="user_order">
         <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'recharge')">Recharge</button>
            <button class="tablinks" onclick="openCity(event, 'withdrawl')">Withdrawl</button>
            <!-- <button class="tablinks" onclick="openCity(event, 'l3')">Level 3</button> -->
        </div>
    </section>

 @include('layouts.bottomTabs')
    </body>
</html>