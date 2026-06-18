<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add money</title>
   

    <style>
     .card-body{
         display:flex;
         flex-wrap:wrap;
         border-radius: 0.16rem;
         margin: 0 0.266667rem;
         padding-top: 0.266667rem;
        background: #fff;
        box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
         
     }
     
     .card-body .card-new{
    border-radius: 0.213333rem;
    margin: 0 0 0.266667rem 0.32rem;
    padding: 0.426667rem 0;
    width: 18.266667rem;
    box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
    background:#eef4fe;
    height: 8rem;
     }
     .card-new{
         display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
     }
     .data-title{
    text-align: center;
    line-height: .693333rem;
    font-size: 16px;
     }
     .data-title{
         flex-basis: 100%;
    text-align: center;
     }
     .values{
         color:#ee4d2d;
         font-weight: 700;
     }
     .data-cards{
         border-radius: 0.16rem;
    margin: 0 0.266667rem;
    display: flex;
    flex-wrap: wrap;
    padding-top: 0.266667rem;
    background: #fff;
    box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
     }
     ul {
  list-style-type: none;
}
       
    </style>
</head>

<body >

 <section class="card-body">
     <ul class="data-cards">
         <li class="card-new">
             <p class="data-title">Total assets</p>
             <p class="data-title values">200.00</p>
         </li>
          <li class="card-new">
             <p class="data-title">Total Profit</p>
             <p class="values data-title">500</p>
         </li>
          <li class="card-new">
             <p class="data-title"></p>
             <p class="values data-title"></p>
         </li>
          <li class="card-new">
             <p class="data-title"></p>
             <p class="values data-title"></p>
         </li>
     </ul>
 </section>

</body>

</html>