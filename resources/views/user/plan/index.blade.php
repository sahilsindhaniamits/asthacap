@extends('layouts.app')

@section('content')

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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


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
        display: flex;
        justify-content: space-between;
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
        color: red;
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
        background-color: black;
        border: none;
        color: white;
        text-align: center;
        font-size: 15px;
        padding: 5px 50px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        width: 100%;
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
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="planList">
                        @foreach($plans as $plan)
                        <div class="plan">
                            <div class="name">
                                <h3>{{ $plan->name }}</h3>
                                <div class="Times" style="font-size: 23px;">
                                    <b>
                                        {{ $plan->total }}x
                                    </b>
                                </div>
                            </div>

                            <div class="detailsContainer">
                                <div class="imageContainer">
                                    <img src="{{ $plan->image }}" alt="" height="100%" width="100%">
                                </div>
                                <div class="details">
                                    <table class="detailsTable">
                                        <tr>
                                            <td class="label">Product price</td>
                                            <td>:</td>
                                            <td class="value">${{ $plan->price }}</td>
                                        </tr>
                                        <tr>
                                            <td class="label">Daily income</td>
                                            <td>:</td>
                                            <td class="value">${{ $plan->daily_income }}</td>
                                        </tr>
                                        <tr>
                                            <td class="label">Total income</td>
                                            <td>:</td>
                                            <td class="value">${{ $plan->total_income }}</td>
                                        </tr>
                                        <tr>
                                            <td class="label">Complete cycle</td>
                                            <td>:</td>
                                            <td class="value">{{ $plan->complete_cycle }}</td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                            <div class="actionBtnContainer">
                                <button class="buyPlan customBtn" data-target="{{ route('plan.buy', $plan->plan_id) }}">Buy</button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 200px;" ></div>

@include('layouts.bottomTabs')
<script src="/js/sweetalert.js"></script>
<script src="/js/jquery.min.js"></script>

<script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
</script>


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





@endsection