@extends('layouts.app')

@section('style')


<style>
    body,
    html {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    div {
        box-sizing: border-box;
    }
</style>

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<style>
    .card {
        border: 0px !important;
        background-color: transparent !important;
    }

    .plan {
        /* height: 100px; */
        background-color: white;
        margin-bottom: 20px;
        padding: 15px;
        padding-bottom: 15px;
        border-radius: 10px;
        box-shadow: 4px 5px 20px lightgray;
    }

    .plan .name {

        margin-bottom: 15px;
    }

    .plan h3 {
        margin: 0 !important;
    }

    .plan .detailsContainer {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;

    }

    .plan .detailsContainer .imageContainer {
        height: 150px;
        width: 150px;
        border-radius: 10px;
        overflow: hidden;
        /* background-color: lightgrey; */
    }

    .plan .detailsContainer .details {
        height: 150px;
        min-width: 150px;
        border-radius: 10px;
        overflow: hidden;

    }


    .plan .actionBtnContainer {
        margin-top: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .plan .detailsTable {

        height: 100%;
    }

    .plan .detailsTable .label {
        font-weight: bold;
        opacity: .8;
    }

    .plan .detailsTable .value {
        font-weight: bold;
        opacity: .8;
        color: lightgrey;
    }

    .actionList {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-bottom: 20px;
        padding: 15px;
        padding-bottom: 10px;
        /* padding-bottom: 15px; */
        border-radius: 10px;
        box-shadow: 4px 5px 20px lightgray;
        background-color: white;

    }

    .actionList .action {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .actionList .actionImage {
        height: 50px;
        width: 50px;
        border-radius: 50px;
        margin-bottom: 5px;
        /* background-color: lightgrey; */
    }

    a {
        all: unset;
    }

    .bannerList {
        margin-bottom: 35px;
        border-radius: 10px;
        box-shadow: 4px 5px 20px lightgray;
        background-color: white;
        /* overflow: hidden; */
    }

    .flickity-page-dots {
        margin: 0 !important;
    }
</style>

<style>
    html {
        font-family: sans-serif;
    }

    main {
        margin: auto;
        /* width: 90%; */
        max-width: 777px;
    }

    .carousel-cell {
        width: 100%;
        padding: 3em 0;
        background-color: cadetblue;
        text-align: center;
        color: aliceblue;
        font-weight: 700;
    }


    .flickity-page-dots .dot {
        position: relative;
        counter-increment: line-number 1;
        width: auto;
        height: auto;
        border-radius: 0;
        padding: .25em .333em;
        /* margin: 0 1em; */
        background-color: transparent;
        border-bottom: 2px solid transparent;
        background-color: lightgray;
        border-radius: 10px;
        opacity: 1;
    }

    /* why not display:none? Because the counter will be changed; The hidden elements won't incerement the counter */
    .flickity-page-dots .dot.dot--gap {
        visibility: hidden;
        font-size: 0;
        margin: 0;
        padding: 0;
    }

    .flickity-page-dots .dot.dot--gap+.dot:not(.dot--gap):after {
        content: "…";
        position: absolute;
        right: 100%;
        bottom: 10%;
        margin-right: 1em;
        pointer-events: none;
    }


    .flickity-page-dots .dot.is-selected {
        background-color: black;
    }

    .flickity-viewport {
        border-radius: 10px;
    }


    .carousel-cell {
        width: 100%;
        /* full width */
        padding-left: 10px;
        height: 90px;
        background: #fff;
        /* center images in cells with flexbox */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carousel-cell img {
        display: block;
        width: 100%;
    }
</style>



<style>
    .card-body {
        padding: 0 !important;
    }
</style>
<!-- /// cstmbtn -->

<style>
    .customBtn {
        border-radius: 4px;
        background-color: skyblue;
        border: none;
        color: black;
        text-align: center;
        font-size: 15px;
        padding: 5px 50px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .customBtn span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .customBtn span:after {
        content: '00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .customBtn:hover span {
        padding-right: 25px;
    }

    .customBtn:hover span:after {
        opacity: 1;
        right: 0;
    }

    .py-4 {
        padding: 0 !important;
    }
</style>


<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
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
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        width: 33%
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        /* border: 1px solid #ccc; */
        border-top: none;
    }
</style>
<style>
    .invitationLinkContainer {
        display: flex;
        min-height: 100px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 2px 3px 15px lightgrey;
        width: 95%;
        align-self: center;
        margin: auto;
        margin-top: 43px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .invitationLink {
        margin-bottom: 15px;
    }

    .headerContainer {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
        background: white;
        margin: 10px 0px;
        padding: 12px;
        box-shadow: 2px 3px 15px lightgrey;
        border-radius: 10px;
    }

    .headerContainer .item {
        height: 100px;
        /* background-color: lightgrey; */
        width: 100px;
        border-radius: 50px;
        position: relative;
        margin-bottom: 10px;
    }

    .headerContainer .action {
        position: absolute;
        bottom: 0px;
        right: 5px;
        display: flex;
        justify-content: flex-end;

        align-items: center;
        width: 100%;
    }

    .headerContainer .action .edit {
        height: 20px;
        width: 20px;
        /* background-color: grey; */
    }

    .tabContainer {
        background: white;
        margin: 10px 0px;
        padding: 10px;
        box-shadow: 2px 3px 15px lightgrey;
        border-radius: 10px;
    }

    .actionContainer {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
        background: white;
        margin: 10px 0px;
        padding: 12px;
        box-shadow: 2px 3px 15px lightgrey;
        border-radius: 10px;
        flex-wrap: wrap;
    }

    .actionContainer .row {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin: 10px;
    }

    .actionContainer .item {

        margin: 10px;
        height: 90px;
        width: 90px;
        padding: 0;
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    .actionContainer .item .text {
        width: 100%;
        position: absolute;
        bottom: 0px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .actionContainer .item .img {
        height: 50px;
        width: 50px;
        bottom: 5px;
        position: relative;
        border-radius: 100px;
    }
    .balance {
    height: 4.846667rem;
    display: flex !important;
    justify-content: space-between;
    /* width: 100% !important; */
    background: #333366 !important;
    border-radius: 0.3rem !important;
    /* margin: 3px auto auto; */
    padding: 0.5rem 0.5rem 0.8rem 0.5rem;
    position: relative;
    /* top: -70px; */
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
    z-index: 10;
    margin-top: 15px;
}
.balance p {
    float: left;
    font-size: 1.373333rem;
    color: #fff;
    text-align: center;
}
balance p span {
    color: #fff;
    margin-top: 0.32rem;
    display: block;
}
.balance p em {
    display: block;
    margin-top: 0.2rem;
    color: #fff;
    font-style: normal;
    font-size: 1.346667rem;
}
</style>

@endsection

@section('content')


<div class="container">
    <div data-v-d5f15326="" class="balance"><p data-v-d5f15326=""><span data-v-d5f15326="">Assets</span><em data-v-d5f15326=""><small data-v-d5f15326="">{{$assets}}&nbsp$</small></em></p><p data-v-d5f15326=""><span data-v-d5f15326="">Recharge</span><em data-v-d5f15326=""><small data-v-d5f15326="">{{$balance}}&nbsp&nbsp$</small></em></p><p data-v-d5f15326=""><span data-v-d5f15326="">Income</span><em data-v-d5f15326=""><small data-v-d5f15326="">0&nbsp$</small></em></p></div>

    <div class="col-lg-12 headerContainer">
        <div class="item">
        <img src="/icons/account.png" alt="" height="100%" width="100%">
            <div class="action">
                <a class="edit" href="{{ route('profile.edit') }}" style="z-index: 1000;">
                    <img src="/images/edit.avif" alt="" height="100%" width="100%">
                </a>
                <p  style="
    font-size: 10px;
    marging-right: 10px;
    margin-right: -159px;
    font-size: 1.7rem!important;
    color: #000!important;
    font-weight: 400!important;
">{{$uphone}}</p>
             </div>
        </div>
    </div>



    <div class="actionContainer">
        <div class="row">
            <a class="item" href="{{ route('profile.bank') }}">
                <div class="img">
                    <img src="/icons/bank.png" alt="" height="100%" width="100%">
                </div>
                <span class="text">
                    <span>Binance Add.</span>
                </span>
            </a>
            <a class="item">
                <div class="img">
                <img src="/icons/report.png" alt="" height="100%" width="100%">
                </div>
                <span class="text">
                    <span>Reports</span>
                </span>
            </a>
        </div>
        <div class="row">
            <a class="item">
                <div class="img">
                <img src="/icons/org.png" alt="" height="100%" width="100%">
                </div>
                <span class="text">
                    <span>Company</span>
                </span>
            </a>
            <a class="item" href="{{ route('logout') }}">
                <div class="img">
                <img src="/icons/logout.png" alt="" height="100%" width="100%">
                </div>
                <span class="text">
                    <span>Logout</span>
                </span>
            </a>
        </div>
    </div>
</div>
<div style="margin-top: 200px;"></div>
@include('layouts.bottomTabs')
<script src="/js/sweetalert.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
</script>
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

<script>
    $('.withdrawlBalance').click(function() {
        const target = "{{ route('wallet.withdraw-money') }}";

        let input = document.createElement("input");
        input.value = '';
        input.type = 'text';
        input.className = 'swal-content__input';

        swal('', {
                content: input,
                text: 'Enter withdrawl amount',
                icon: 'info',
                buttons: ['Cancel', 'withdraw']
            })
            .then((res) => {
                if (res)
                    makeRequest(target, input.value)
            });
    });


    function makeRequest(target, amount = false) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: target,
            data: {
                amount
            },
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                if (!result.status) {
                    swal({
                        text: result.message,
                        icon: 'error',
                        timer: 5000,
                        buttons: false,
                    });
                    return;
                }
                swal({
                    text: result.message,
                    icon: 'success',
                    timer: 5000,
                    buttons: false,
                });
            },
            error: function(result) {
                swal({
                    title: 'Something went wrong',
                    text: "Please try again later",
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                })
            }
        });
    }
</script>
<script>

</script>


@if(session('success'))
<script>
    swal({
        text: "{{ session('success') }}",
        icon: 'success',
        timer: 5000,
        buttons: false,
    });
</script>
@endif


<script>
    let plan = null;
    let planbtn = null;


    $('.buyPlan').click(function() {
        $(this).prop('disabled', true);
        planbtn = this;
        plan = $(this).data('target');

        swal({
            title: "Are you sure?",
            text: "You Want to purchase this plan!",
            icon: "info",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: false,
        }).then(function(isConfirm) {
            if (isConfirm) purchasePlan(plan)
            else $(planbtn).prop('disabled', false);
        })
    })

    const purchasePlan = (url) => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url,
            data: {
                // 'token': token
            },
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $(planbtn).prop('disabled', false);
                if (!result.status) {
                    if (result.error) {
                        swal({
                            text: result.message,
                            icon: 'error',
                            timer: 3000,
                            buttons: false,
                        })
                        return;
                    }

                    swal({
                        text: result.message,
                        icon: 'error',
                        timer: 3000,
                        buttons: false,
                    });
                    return;
                }

                swal({
                    text: result.message,
                    icon: 'success',
                    timer: 3000,
                    buttons: false,
                });
            },
            error: function(result) {
                $(planbtn).prop('disabled', false);
                swal({
                    title: 'Something went wrong',
                    text: "Please try again later",
                    icon: 'error',
                    timer: 3000,
                    buttons: false,
                })
            }
        });
    }
</script>
@endsection