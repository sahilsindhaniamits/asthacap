@extends('layout.admin.master')
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
        background-color: lightgrey;
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
        background-color: lightgrey;
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
</style>

@endsection


@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="padding: 20px;">
        <div class="card-body">
            <h4 class="card-title">User Information</h4>
            <p class="card-description">
                <!-- A simple suggestion engine -->
            </p>
            <div class="form-group row">
                <div class="col">
                    <label>Name</label>
                    <div id="bloodhound">
                        <h4>{{ $user->name ?? '' }}</h4>
                    </div>
                </div>
                <div class="col">
                    <label>Phone</label>
                    <div id="bloodhound">
                        <h4>{{ $user->phone ?? '' }}</h4>
                    </div>
                </div>

                <div class="col">
                    <label>Balance</label>
                    <div id="bloodhound">
                        <h4>${{ $wallet->balance ?? 0 }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div>
            <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'l1')">Level 1</button>
                <button class="tablinks" onclick="openCity(event, 'l2')">Level 2</button>
                <button class="tablinks" onclick="openCity(event, 'l3')">Level 3</button>
            </div>
            @foreach([1, 2, 3] as $level)
            <div id="l{{ $level }}" class="tabcontent" style="display: {{ $level == 1 ? 'block' : 'none' }};">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Plans</th>
                                <th scope="col">Network</th>
                                <th scope="col">Joining Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $dataRow = 'level_' . $level . '_users' @endphp
                            @foreach($$dataRow as $index => $user)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>${{ $user->with_wallet->balance ?? 0 }}</td>
                                <td>
                                    <a href="{{ route('admin.user.plans', $user->id) }}" target="_blank" class="btn ">
                                        <i class="mdi mdi-format-list-checks"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.user.network', $user->id) }}" target="_blank" class="btn ">
                                        <i class="mdi mdi-account-switch"></i>
                                    </a>
                                </td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




@endsection


@section('script')

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


<script src="/js/jquery.min.js"></script>


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



@endsection