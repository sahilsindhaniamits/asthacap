<style>
 body{
     overflow-x:hidden;
 }
@media (min-width: 576px) {
  .col-12.col-sm-3 {
    display: block!important;
  }
  .w-50.h-40{
      width:100%!important;
      height:100%!important;
  }
    
}
 @media (max-width: 800px) {
     .h_right{
         display:flex;
        justify-content:space-around!important;
    }
     .header{
         height:40px!important;
     }
     
 }

 .main{
     display:flex;
     flex-direction:column;
     width:100%;
     gap:3px;
    }
    .overlay_text{
        display: flex;
        flex-direction:column;
    position: relative;
    width: 50%;
    left: 50%;
    height: 100%;
    top: 236px;
    }
    .header{
        display:flex;
        width:100%;
        height: 63px;
         align-items: center;
         background-color:blue;
        }
        
        .h_left{
            display:flex;
            width:13%;
           
            align-items:center;
            margin-left:3px;
        }
        .h_left i {
  margin-right: 10px; /* Add margin to create a gap between icons */
}
        .h_left div{
            position:relative;
        }
        
        .h_right{
            display:flex;
            width:30%;
            justify-content:space-around;
           
            position:relative;
            left:55%
          }
          i{
              color:white;
          }
          .n_number{
              width:11px;
              border-radius:50%;
              background-color:red;
              z-index: 2;
              left: 12px
          }
 </style>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


 </head>
     <body>
         <section class="main">
             
             
             <div class="header">
                 <div class="h_left">
                   
                     <div>
                        
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                         
                         </div>
                      <div><i class="fa fa-heart" aria-hidden="true"></i></div>
                      </div>
                        <div class="h_right">
                     <div>
                         <img src="" class="logo">
                     </div>
                     <div><span style="color:white">Register/Login</span></div>
                      <div>
                          <input type="text" placeholder="search" class="search"></div>
                 </div>
                 </div>
                 
             </div>
             <div class="container">
                 <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Service</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">Pricing</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">List</a>
  </li>
</ul>
             </div>
        <div class="container-fluid p-0">
            <!--<div class="overlay_text">-->
            <!--    <div><h2>American Food</h2></div>-->
            <!--    <div><h4>Special Food</h4></div>-->
            <!--</div>-->
            <img src="https://cdn.dribbble.com/users/1520130/screenshots/10969873/media/dd9dec110bed14329ce31291f682e090.jpg?compress=1&resize=800x600&vertical=center" class="w-100 h-60 " alt="Banner Image" >
        </div>
    <div class="container-fluid ">
        <div class="row justify-content-space-between">
            <div class="col-12 col-md-8">
        <div class=" card w-100 w-md-90">
  <div class="card-body">
     <div class="row justify-content-between">
      <div class="col-auto">
        <h5 class="card-title">Peanut Butter</h5>
      </div>
      <div class="col-auto">
        <h5 class="card-title">$49</h5>
      </div>
    </div>
    
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
  

  </div>
  </div>
  <div class="col-12 col-sm-3 d-flex justify-content-center align-items-center">
        <img src="https://cdn.dribbble.com/users/1520130/screenshots/10969873/media/dd9dec110bed14329ce31291f682e090.jpg?compress=1&resize=800x600&vertical=center" class="w-50 h-40" alt="Banner Image" >
      
  </div>
  
    </div>
    <div class="row justify-content-space-between">
            <div class="col-12 col-md-8">
        <div class=" card w-100 w-md-90">
  <div class="card-body">
     <div class="row justify-content-between">
      <div class="col-auto">
        <h5 class="card-title">Pumpkin Pi</h5>
      </div>
      <div class="col-auto">
        <h5 class="card-title">$35</h5>
      </div>
    </div>
    
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
  

  </div>
  </div>
  <div class="col-12 col-sm-3 d-flex align-items-center justify-content-center">
        <img src="https://cdn.dribbble.com/users/1520130/screenshots/10969873/media/dd9dec110bed14329ce31291f682e090.jpg?compress=1&resize=800x600&vertical=center" class="w-50 h-40 " alt="Banner Image" >
      
  </div>
  
    </div>
    <div class="row justify-content-space-between">
            <div class="col-12 col-md-8">
        <div class=" card w-100 w-md-90">
  <div class="card-body">
     <div class="row justify-content-between">
      <div class="col-auto">
        <h5 class="card-title">Russian Salad</h5>
      </div>
      <div class="col-auto">
        <h5 class="card-title">$10</h5>
      </div>
    </div>
    
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
  

  </div>
  </div>
  <div class="col-12 col-sm-3 d-flex align-items-center justify-content-center">
        <img src="https://cdn.dribbble.com/users/1520130/screenshots/10969873/media/dd9dec110bed14329ce31291f682e090.jpg?compress=1&resize=800x600&vertical=center" class="w-50 h-40 " alt="Banner Image" >
      
  </div>
  
    </div>
    
    </div>
             
         </section>
     </body>
     </html>