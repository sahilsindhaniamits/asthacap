@extends('layout.admin.master')
<style>
     .card_container{
        display:flex;
        flex-direction:column;
        width:100%;
        height:100%;
        gap:0.5rem;
        padding-left:1em;
    }
    .dash_cards{
        display:flex;
        width:100%;
        flex-wrap:wrap;
        justify-content:space-around;
        height:60%;
    }
    .admin_cards{
        display:flex;
        width:24%;
        height:55%;
        background:linear-gradient(to right,#fe9365,#feb798);
        align-items:center;
        padding-left:1em;
    }
    .titles{
        display:flex;
        flex-direction:column;
        gap:0.3rem;
        width:80%;
    }
    .titles{
        font-size:30px;
        color:#fff;
        font-weight:bold;
    }
    .card_icon{
        font-size:32px;
        color:#fe9365;
    }
    .order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
  </style>
@section('content')
 <!--<div class="card_container">-->
           <!--<div class="dash_cards">-->
           <!--    <div class="admin_cards">-->
           <!--        <div class="titles">-->
           <!--            <p>Loan Request</p>-->
           <!--            <h3>{{$loan_requests}}</h3>-->
           <!--        </div>-->
           <!--        <div class="card_icon">-->
           <!--          <i class="fa fa-user" aria-hidden="true"></i>-->
           <!--        </div>-->
           <!--  </div>-->
           <!--  <div class="admin_cards">-->
           <!--        <div class="titles">-->
           <!--            <p>Loan Amount</p>-->
           <!--            <h3>{{$loan_amount}}</h3>-->
           <!--        </div>-->
           <!--        <div class="card_icon">-->
           <!--            <i></i>-->
           <!--        </div>-->
           <!--  </div>-->
           <!--  <div class="admin_cards">-->
           <!--        <div class="titles">-->
           <!--            <p>Approved Loan Amount</p>-->
           <!--            <h3>{{$a_amount}}</h3>-->
           <!--        </div>-->
           <!--        <div class="card_icon">-->
           <!--            <i></i>-->
           <!--        </div>-->
           <!--  </div>-->
           <!--  <div class="admin_cards">-->
           <!--        <div class="titles">-->
           <!--            <p>Approve Amount %</p>-->
           <!--            <h3>{{$per}}</h3>-->
           <!--        </div>-->
           <!--        <div class="card_icon">-->
                    
           <!--        </div>-->
           <!--  </div>-->
           <!--</div>-->
           
    <div class="container mt-3">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Loan Request </h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{$loan_requests}}</span></h2>
                    <!--<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>-->
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Loan Amount</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>{{$loan_amount}}</span></h2>
                    <!--<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>-->
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Approved Loan AMount </h6>
                    <h2 class="text-right"><i class="fa fa-bank f-left"></i><span>{{$a_amount}}</span></h2>
                    <!--<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>-->
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Approved Amount %</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>{{$per}}</span></h2>
                    <!--<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>-->
                </div>
            </div>
        </div>
	</div>
</div>
@endsection