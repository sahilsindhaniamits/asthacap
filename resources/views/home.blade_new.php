<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="/js/sweetalert.js"></script>
        <script src="/js/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .slider {
                /*overflow: hidden;*/
                display:flex;
                height: 20%!important;

            }
            .slider-items {
                display: flex;
                animation: slide 10s infinite;
            }
            .slider-item {
                /*flex: 1 0 100%;*/
                width: 100%;
            }

            @keyframes slide {
                0% {
                    transform: translateX(0%);
                }
                33.33% {
                    transform: translateX(-100%);
                }
                66.67% {
                    transform: translateX(-200%);
                }
                100% {
                    transform: translateX(0%);
                }
            }

            .home .btns .btn {
                flex: 0 0 11.373333rem;
                text-align: center;
                color: #fff;
                font-weight: 900;
                font-size: 16px;
                height: 3.90rem;
                line-height: 3.90rem;
                background-image: url('https://khutso.com/img/deposit.a7823eb9.png');
                background-size: 100% 100%;
            }
            .btn{
                z-index:99999;
            }
        </style>
    </head>
    <body>
        <section class="wa_page home">


            @if(session('newlogin'))
            <script>
                alert('{{ session('newlogin') }}')
            </script>
            @endif

            <main lass="page_content">
                <div class="container">
                    <div class="slider">
                        <div class="slider-items">
                            @foreach($banners as $banner)
                            <div class="slider-item">
                                <img src="{{ $banner->image }}" alt="" class="banner_img">
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('wallet.add-money')}}" class="btn"> <span class="btn"> Deposit</span></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('wallet.withdraw-money') }}" class="btn"><span class="btn">Withdraw</span></a> 
                        </div>


                    </div>
                </div>
            </main>

            @include('layouts.bottomTabs')
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    1 of 2
                </div>
                <div class="col">
                    2 of 2
                </div>
            </div>
            <div class="row">
                <div class="col">
                    1 of 3
                </div>
                <div class="col">
                    2 of 3
                </div>
                <div class="col">
                    3 of 3
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    const CSRF_TOKEN = "{{ csrf_token() }}"
</script>

<script>
    $('.withdrawlBalance').click(function () {
        const target = "{{ route('wallet.withdraw-money') }}";

        let input = document.createElement("input");
        input.value = '';
        input.placeholder = 'Minimum Withdrawal amount is 25$,Withdraw once in 24 hours';
        input.type = 'number';
        input.className = 'swal-content__input';

        swal('', {
            content: input,
            html: '<p>test</p>',
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
            success: function (result) {
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
            error: function (result) {
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
    // Carousel
    let carousel = document.querySelector('.banner-carousel');
    if (carousel) {
        var flkty = new Flickity(carousel, {
            on: {
                ready: function () {
                    // updateDotPagination(); // initial update
                }
            },
            cellAlign: 'left',
            contain: true,
            freeScroll: true,
            loop: true,
            contain: true,
            autoPlay: true,
            autoPlay: 3000,
            // disable previous & next buttons and dots
            prevNextButtons: false,
            pageDots: true,
            pauseAutoPlayOnHover: false,
        });
        flkty.on('change', function (index) {
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

<script>

//    const sliderItems = document.querySelector('.slider-items');
//    const sliderButton = document.querySelector('.slider-button');
//
//
//    sliderButton.addEventListener('click', () => {
//        sliderItems.classList.toggle('animate');
//    });
</script>
<script>
    let plan = null;
    let planbtn = null;


    $('.buyPlan').click(function () {
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
        }).then(function (isConfirm) {
            if (isConfirm)
                purchasePlan(plan)
            else
                $(planbtn).prop('disabled', false);
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
            success: function (result) {
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
            error: function (result) {
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