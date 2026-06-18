

<style>
html, body {
  height: 100%;
  margin: 0;
}
.table{
    width:100%;
}
.tabContainer{
        background: white;
    margin: 40px 0px;
    padding: 10px;
    box-shadow: 2px 3px 15px lightgrey;
    border-radius: 10px;
    width:100%;
    }
    .tab {
        overflow: hidden;
        /* border: 1px solid #ccc; */
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 14px;
        transition: 0.3s;
        font-size: 15px;
        width: 33%
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {

        background-color: black;
        color: white;
        border-radius: 10px;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 20px 12px;
        /* border: 1px solid #ccc; */
        border-top: none;
    }
    .team_header{
        display:flex;
        align-items:center;
         width: 100%;
        height: 16%;
         box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        justify-content:center;
        background: #fffe;
    }
    .back-button{
        flex: 0 0 20%;
    }
      .header-title{
        flex: 1 0 80%;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-right: 1.2em;
    }
    .team_section{
        display:flex;
       flex-direction: column;
       height: 100%;
    }
    .header-bg{
    position: absolute;
    top: 0;
    left: 0;
    width: 150%;
    height: 10.666667rem;
    background: #ee4d2d;;
     border-radius: 50%; 
    top: -30%;
    left: -40%;
    z-index:-1;
}
.team_cards_section{
    display:flex;
    justify-content:space-evenly;
    flex-wrap:wrap;
    margin-top: 50px;
    background: #FFF;
    box-shadow: 0 4px 20px rgb(0 0 0 / 25%);
    margin: 3%;
    height: 77%;
    padding: .4em;
    border-radius:.3rem;
  
}
.team_card{
    display:flex;
    width:44%;
    height: 107px;
    flex-direction: column;
    background:#eef4fe;
    border-radius: 0.213333rem;
   align-items: center;
   justify-content: end;
   margin: 1%;
   box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
   
    
}
.data-type{
    text-align: center;
    line-height: .693333rem;
  font-size: 22px;

}
.data-value{
    color:#2889fe;
    font-size: 18px;
    font-weight:600;
}
.heading{
    font-size: 16px;
}
.level_users{
    display:flex;
    width:100%;
    margin-top: -1em!important;
    
}
.team_data{
    display:flex;
    flex-direction:column;
    background:#fff;
    width:100%;
    height:20%;
    padding-left:0.1em;
    gap:0.4rem
}
.user_details{
    display:flex;
    width:100%;
    justify-content:space-between;
    align-items:center;
    font-weight:bold;
    font-size:20px;
}
.finance_data{
    display:flex;
    width:100%;
    height:25%;
    justify-content:space-evenly;
    align-items:center;
    border-bottom: 0.026667rem solid #aaa;
    text-align: center;
}
.date{
    color:#aaa!important;
    text-align: center;
}
@media (max-width: 800px) {
       .team_header{
           height:8%!important;
       }
       .team_card{
           width:46%!important;
           padding-top: 2em;!important;
           height:20%;
           flex-wrap:nowrap!important;
       }
       .data-type {
           font-size:13px!important;
       }
}
</style>
<html>
<body style="background: aliceblue;
overflow-y:scroll;">
    <head>  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <div class="team_header">
    <div class="back-buttion">
        <i class="fa fa-chevron-left" style="padding-left:.5em; font-size:19px"></i>
    </div>
    <div class="header-title">
        <h4 class="heading">Team Reports</h4>
    </div>
</div>
<section class="team_section">
   

<div class="team_cards_section">
    <div class="team_card">
        <div class="data-type">Team Balance</div>
        <p class="data-value">{{$totalTransaction}}</p>
    </div>


    <div class="team_card">
        <div class="data-type">Team  Deposit</div>
        <p class="data-value">{{$todaysTransaction}}</p>
    </div>


    <div class="team_card">
         <div class="data-type">Team Withdrawal</div>
        <p class="data-value">{{$teamwithdrawal}}</p>
    </div>


    <div class="team_card">
        <div class="data-type">Team Order Commission</div>
        <p class="data-value">2.00</p>
    </div>
 <div class="team_card">
        <div class="data-type">First Level Members</div>
        <p class="data-value">{{count($level_1_users)}}</p>
    </div>
 <div class="team_card">
        <div class="data-type">Team Size</div>
        <p class="data-value">{{$totalNetwork}}</p>
  </div>

</div>
<div class="level_users">
     <div class="tabContainer">
        <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'l1')">Level 1</button>
            <button class="tablinks" onclick="openCity(event, 'l2')">Level 2</button>
            <button class="tablinks" onclick="openCity(event, 'l3')">Level 3</button>
        </div>
        @foreach([1, 2, 3] as $level)
        <div id="l{{ $level }}" class="tabcontent" style="display: {{ $level == 1 ? 'block' : 'none' }};">
            @php $dataRow = 'level_' . $level . '_users' @endphp
            @foreach($$dataRow as $index => $users)
           <div class="team_data">
               <div class="user_details">
                   <p>User:{{$users->name}}***</p>
                   <p c;ass="date" style="
    color: aaa;font-size: 13px;">{{$users->created_at}}</p>
               </div>
               <div class="finance_data">
                   <div>
                       <p>Deposit</p>
                        <p class="date">2</p>
                   </div>
                    <div>
                       <p>Withdraw</p>
                        <p>2</p>
                   </div>
                    <div>
                       <p>Commision</p>
                        <p>2</p>
                   </div>
               </div>
           </div>
                   @endforeach
        </div>
        @endforeach
    </div>

</div>

</section>
<div style="margin-top: 90px;
width:60px;
background:red;"></div>
@include('layouts.bottomTabs')
</body>
<script>
    
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</script>
</html>