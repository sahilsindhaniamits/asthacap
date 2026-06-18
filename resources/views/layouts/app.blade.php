<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The20Money- Soft Drinks') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@600&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cabin', sans-serif;
            font-family: 'Noto Sans JP', sans-serif;
        }
    .wa_header[data-v-fd4aeb9e] {
    flex-shrink: 0;
    height: 4.173333rem;
    position: relative;
    color: #fff;
    box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
    color: #333;
    z-index: 100;
}
.wa_header .header_left[data-v-fd4aeb9e], .wa_header .header_right[data-v-fd4aeb9e] {
    position: absolute;
    top: 0;
    height: 100%;
    display: flex;
    align-items: center;
}
.message_count[data-v-75aa390b] {
    width: 0.533333rem;
    height: 0.64rem;
    margin-left: 0.266667rem;
    position: relative;
}
.wa_header .header_left[data-v-fd4aeb9e] {
    left: 0;
}
.message_count[data-v-75aa390b] {
    width: 0.533333rem;
    height: 0.64rem;
    margin-left: 0.266667rem;
    position: relative;
}
.wa_header .header_title[data-v-fd4aeb9e] {
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    box-sizing: border-box;
    padding: 0.213333rem 0;
}
.wa_header .header_title .logo[data-v-fd4aeb9e] {
    width: auto;
    height: 100%;
}
.wa_header .header_right[data-v-fd4aeb9e] {
    right: 0;
    color: #887556;
}
.wa_header .header_left[data-v-fd4aeb9e], .wa_header .header_right[data-v-fd4aeb9e] {
    position: absolute;
    top: 0;
    height: 100%;
    display: flex;
    align-items: center;
}
.home[data-v-4ca23e08] .header_right .right_wrap {
    color: rgb(248, 238, 197) !important;
}
.wa_header .header_right .right_wrap[data-v-fd4aeb9e] {
    display: flex;
    margin-right: 0.266667rem;
    align-items: center;
}
.wa_header .header_right .right_wrap span[data-v-fd4aeb9e] {
    margin-left: 0.106667rem;
    font-weight: 700;
    font-size: .346667rem;
}
  .home[data-v-4ca23e08] {
    background: #f8f8f7;
    color: #344059;
    position: relative;
    overflow-x: hidden;
}
.wa_page {
    display: flex;
    height: 100%;
    flex-direction: column;
    background: #eef1f7;
}
    </style>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Scripts -->

</head>
<body>
    @include('layouts.loader')
    @yield('style')

    
    <div id="app">
        <section data-v-4ca23e08="" class="wa_page home">
        @yield('content')

         <header data-v-fd4aeb9e="" data-v-4ca23e08="" class="wa_header" style="background: rgb(222, 59, 42);">
             <div data-v-fd4aeb9e="" class="header_left">
            <div data-v-75aa390b="" data-v-4ca23e08="" class="message_count" data-v-fd4aeb9e="">
            <span data-v-75aa390b="" class="iconfont fz22 icon-lingdang"></span><!----><!----></div></div>
            <div data-v-fd4aeb9e="" class="header_title">
                <img data-v-fd4aeb9e="" src="https://watermelon-prod-s3.s3.ap-east-1.amazonaws.com/img_web/hbsdf257/upload/hbsdf257-202211212103290827677.png" alt="" class="logo"></div><!---->
            <div data-v-fd4aeb9e="" class="header_right"><div data-v-fd4aeb9e="" slot="right" class="right_wrap"><i data-v-fd4aeb9e="" class="iconfont icon-jiedianshiqu fz22"></i><span data-v-fd4aeb9e="">UTC-5</span></div></div>
        </header>
         </section>
     
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {

            document.getElementById("loader").style.display = "none";
        });
    </script>
</body>

</html>