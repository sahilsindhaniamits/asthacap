@extends('layouts.master')



@section('content')
   <div class="header-and-banner-con w-100 generic-banner-con">
        <div class="header-and-banner-inner-con">
          @include('header')
            <section class="banner-main-con">
                <div class="container">
                    <!--banner-start-->
                    <div class="banner-con text-center">
                        <h1>About</h1>
                        <p class="col-lg-7 col-md-8 p-0 ml-auto mr-auto" style="margin-left: auto;
    margin-right: auto;">We offer straightforward financial solutions with a personal touch, backed by over five years of experience.
                        </p>
                        <div class="generic-banner-link">
                            <a href="index.html">Home</a>
                            <span>~</span>
                            <a>About</a>
                        </div>
                    </div>
                    <!--banner-end-->
                </div>
            </section>
        </div>
    </div>
      <section class="w-100 float-left padding-top about-us-section client-con">
        <section class=" ptb-100 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="about-us-img">
                            <img src="assets/image/about/abt.png" alt="about us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="genric-heading tex_cen mb-0">
                            <h2 class="position-relative">We Are A Trusted Company With 5+ Years Of Experience
                            </h2>
                            <p class="mb-0">We’re here to provide you with financial solutions for all your lending needs. Whether you're looking for a loan, mortgage, or line of credit, our knowledgeable and experienced lending team will explain our options in a straightforward manner. The only thing we have in common with big banks is our extensive reach.
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--about_1 section end-->


    <!--about_2 section start-->
    <!--<section class="our-portfolio-section w-100 float-left padding-top pd_0 client-con">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-8">-->
    <!--                <div class="genric-heading text-center">-->
    <!--                    <h2 class="position-relative">Supercharge Your <br> Digital Presence-->
    <!--                    </h2>-->
    <!--                    <p class="mb-0">Empowering Businesses with Customised Digital Strategies. Revolutionize Your-->
    <!--                        Brand with High-Performance Websites With Us.-->
    <!--                    </p>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->

    <!--                <div class="portfolio-container" id="MixItUp">-->
    <!--                    <div class="mix portfolio-item branding" data-ref="mixitup-target">-->
    <!--                        <div class="portfolio-wrapper">-->
    <!--                            <a>-->
    <!--                                <div class="content-overlay"></div>-->
    <!--                                <img class="img-fluid" src="assets/image/about/Supercharge_1.png" alt="portfolio" />-->
    <!--                                <div class="content-details fadeIn-bottom text-white">-->

    <!--                                    <p>Web, application, and e-commerce solutions tailored to your business's-->
    <!--                                        specific requirements.</p>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                            <div class="text-center p-4">-->
    <!--                                <h5 class="mb-1">Tailored Solutions</h5>-->

    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="mix portfolio-item other animation" data-ref="mixitup-target">-->
    <!--                        <div class="portfolio-wrapper">-->
    <!--                            <a>-->
    <!--                                <div class="content-overlay"></div>-->
    <!--                                <img class="img-fluid" src="assets/image/about/Supercharge_2.png" alt="portfolio" />-->
    <!--                                <div class="content-details fadeIn-bottom text-white">-->

    <!--                                    <p>User-friendly and captivating interfaces that enhance the user experience.-->
    <!--                                        Engaging and intuitive interfaces that captivate users.</p>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                            <div class="text-center p-4">-->
    <!--                                <h5 class="mb-1">User-focused design</h5>-->

    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="mix portfolio-item animation" data-ref="mixitup-target">-->
    <!--                        <div class="portfolio-wrapper">-->
    <!--                            <a>-->
    <!--                                <div class="content-overlay"></div>-->
    <!--                                <img class="img-fluid" src="assets/image/about/Supercharge_3.png" alt="portfolio" />-->
    <!--                                <div class="content-details fadeIn-bottom text-white">-->

    <!--                                    <p>Robust e-commerce solutions that increase sales, improve consumer-->
    <!--                                        experiences, and boost conversions.</p>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                            <div class="text-center p-4">-->
    <!--                                <h5 class="mb-1">E-Commerce Expertise</h5>-->

    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="mix portfolio-item branding" data-ref="mixitup-target">-->
    <!--                        <div class="portfolio-wrapper">-->
    <!--                            <a>-->
    <!--                                <div class="content-overlay"></div>-->
    <!--                                <img class="img-fluid" src="assets/image/about/Supercharge_4.png" alt="portfolio" />-->
    <!--                                <div class="content-details fadeIn-bottom text-white">-->

    <!--                                    <p>Solutions that are future-proof and are designed using technologies and-->
    <!--                                        architectures that are scalable.</p>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                            <div class="text-center p-4">-->
    <!--                                <h5 class="mb-1">Scalable Programming</h5>-->

    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="gap"></div>-->
    <!--                    <div class="gap"></div>-->
    <!--                    <div class="gap"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--about_2 section end-->


    <!--about_3 section start-->
    <section class="w-100 float-left padding-top padding-bottom_1 client-con">
        <section class="why-choose-us ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="genric-heading text-center">
                            <h4 class="position-relative">Why Choose Us?
                            </h4>
                            <h2 class="position-relative">Discover the Ambe Finance advantage:
                            </h2>
                        </div>



                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="image-wrap">
                            <img src="assets/image/about/about_2.png" alt="why choose us" class="img-fluid m-auto">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="why-choose-us-wrap">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 promo-col">
                                    <div class="promo-item">
                                        <div class="promo-img _1">
                                            <img src="assets/image/about/ff.png" alt="services" width="60">
                                            <h5>Speedy Approval</h5>
                                        </div>

                                        <p>Get approved for your loan in as little as 24 hours, so you can access the funds you need when you need them most.</p>
                                        <div class="promo-bottom-shape">
                                            <img src="assets/image/about/about_3_bg.png" alt="shape">
                                        </div>
                                    </div>
                                    <div class="promo-item">
                                        <div class="promo-img _1">
                                            <img src="assets/image/about/tra.png" alt="services" width="60">
                                            <h5>Flexible Options
                                            </h5>
                                        </div>

                                        <p>We offer a variety of loan products to suit different financial situations, with customizable terms and repayment plans to fit your budget.
                                        </p>
                                        <div class="promo-bottom-shape">
                                            <img src="assets/image/about/about_3_bg.png" alt="shape">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 promo-col">
                                    <div class="promo-item">
                                        <div class="promo-img _1">
                                            <img src="assets/image/about/tra.png" alt="services" width="60">
                                            <h5>Transparent Terms</h5>
                                        </div>

                                        <p>No hidden fees or surprises. We believe in full transparency, so you'll know exactly what to expect throughout the borrowing process.
                                        </p>
                                        <div class="promo-bottom-shape">
                                            <img src="assets/image/about/about_3_bg.png" alt="shape">
                                        </div>
                                    </div>
                                    <div class="promo-item">
                                        <div class="promo-img _1">
                                            <img src="assets/image/about/sup.png" alt="services" width="60">
                                            <h5>Dedicated Support</h5>
                                        </div>

                                        <p>Our team of experienced professionals is here to guide you every step of the way, providing personalized assistance and support to ensure a smooth borrowing experience.</p>
                                        <div class="promo-bottom-shape">
                                            <img src="assets/image/about/about_3_bg.png" alt="shape">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--about_3 section end-->


    <!--about_4 section-->
    <!--<section class="w-100 float-left padding-top padding-bottom client-con">-->
    <!--    <div class="container">-->
    <!--        <div class="container">-->
    <!--            <div class="genric-heading text-center">-->

    <!--                <h2 class="position-relative wow fadeInDown">Fueling Digital Breakthroughs-->
    <!--                </h2>-->

    <!--            </div>-->

    <!--            <div class="row d-flex align-items-center">-->
    <!--                <div class="col-lg-4">-->
    <!--                    <div class="feature-box-layout4">-->
    <!--                        <ul class="feature-list">-->
    <!--                            <li-->
    <!--                                class="wow fadeInDown translate-top-50 opacity-animation transition-50 transition-delay-2000">-->
    <!--                                <h3 class="item-title">Exceptional Craftsmanship</h3>-->
    <!--                                <p>We pride ourselves on delivering functional, attractive, and faultless web and-->
    <!--                                    app solutions.-->
    <!--                                </p>-->
    <!--                            </li>-->
    <!--                            <li-->
    <!--                                class="wow fadeIn translate-top-50 opacity-animation transition-50 transition-delay-2300">-->
    <!--                                <h3 class="item-title">Client-Centric Focus</h3>-->
    <!--                                <p>We make sure that our web and app development process takes your unique needs-->
    <!--                                    into account.</p>-->
    <!--                            </li>-->
    <!--                            <li-->
    <!--                                class="wow fadeInDown translate-top-50 opacity-animation transition-50 transition-delay-2600">-->
    <!--                                <h3 class="item-title">Seamless Integration</h3>-->
    <!--                                <p>Integration of web and app platforms with existing systems, databases, and APIs-->
    <!--                                    is what we do best.-->
    <!--                                </p>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4">-->
    <!--                    <div class="feature-box-layout4">-->
    <!--                        <div class="text-center">-->
    <!--                            <div class="figure-holder">-->
    <!--                                <div class="wow fadeInDown">-->
    <!--                                    <img src="assets/image/about/about_3.png" alt="element" class="img_1">-->

    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4">-->
    <!--                    <div class="feature-box-layout4">-->
    <!--                        <ul class="feature-list">-->
    <!--                            <li-->
    <!--                                class="wow fadeInDown translate-top-50 opacity-animation transition-50 transition-delay-2900">-->
    <!--                                <h3 class="item-title">Future-Ready Solutions</h3>-->
    <!--                                <p>The solutions we create are future-ready using cutting-edge technologies and-->
    <!--                                    industry best practices.</p>-->
    <!--                            </li>-->
    <!--                            <li-->
    <!--                                class="wow fadeIn translate-top-50 opacity-animation transition-50 transition-delay-3200">-->
    <!--                                <h3 class="item-title">Collaborative Partnership</h3>-->
    <!--                                <p>Together, we build powerful web and app experiences by understanding your vision-->
    <!--                                    and goals.-->
    <!--                                </p>-->
    <!--                            </li>-->
    <!--                            <li-->
    <!--                                class="wow fadeInDown translate-top-50 opacity-animation transition-50 transition-delay-3500">-->
    <!--                                <h3 class="item-title">Continuous Innovation</h3>-->
    <!--                                <p>Keeping up with technological advancements is our commitment to continuous-->
    <!--                                    innovation.-->
    <!--                                </p>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--about_4 section end-->

    <!-- about_5 section -->
    <!--<section class="w-100 float-left padding-top padding-bottom  overflow service-build-con text-md-left text-center">-->
    <!--    <div class="container">-->
    <!--        <div class="help-box-content">-->
    <!--            <div class="row align-items-center">-->
    <!--                <div class="col-lg-6 col-md-6">-->
    <!--                    <div class="service-build-lft-con wow slideInLeft">-->
    <!--                        <figure class="mb-0">-->
    <!--                            <img src="assets/image/about/about_4.png" alt="service-build-left-img"-->
    <!--                                class="img-fluid">-->
    <!--                        </figure>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-6 col-md-6">-->
    <!--                    <div class="sloution-box-right-content help-right-con wow slideInRight"-->
    <!--                        style="visibility: visible; animation-name: slideInRight;">-->

    <!--                        <h2>Driven by Integrity, Guided by Principles-->
    <!--                        </h2>-->
    <!--                        <h4 class="item-title">Principles</h4>-->
    <!--                        <p>Integrity, innovation, and customer-centricity drive our principles, ensuring-->
    <!--                            transparent, reliable, and cutting-edge tech solutions that empower businesses to-->
    <!--                            thrive.-->
    <!--                        </p>-->
    <!--                        <h4 class="item-title">Promises</h4>-->
    <!--                        <p class="mb-0">We promise customized solutions, timely project delivery, and ongoing-->
    <!--                            support, empowering your business with innovative technology and a trusted partnership.-->
    <!--                        </p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- about_5 section -->

    <!--==============about_6 section=======================-->
    <!--<section class="w-100 float-left padding-top padding-bottom  overflow  text-md-left text-center">-->
    <!--    <section class="process-wrap-layout1 section-padding-md bg-color-light position-relative ">-->
    <!--        <div class="container">-->
    <!--            <div class="genric-heading text-center">-->
    <!--                <h2 class="position-relative">Where Ideas Find Form-->
    <!--                </h2>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="container">-->
    <!--            <div class="row d-flex align-items-center">-->
    <!--                <div class="col-xl-6 col-12 order-xl-2 pl-0 pr-0">-->
    <!--                    <div class="process-box-layout1">-->
    <!--                        <ul class="figure-holder">-->
    <!--                            <li class="animated-bg">-->
    <!--                                <svg width="993px" height="698px">-->
    <!--                                    <path fill-rule="evenodd" opacity="0.502" fill="rgb(240, 246, 254)"-->
    <!--                                        d="M615.878,633.346 C421.616,682.785 207.128,731.954 63.989,573.875 C-94.294,399.069 67.235,87.796 264.299,20.945 C414.319,-29.945 599.731,16.820 724.612,108.132 C826.171,182.390 906.437,307.315 953.564,424.057 C964.863,452.047 974.424,490.636 972.447,520.765 C970.471,550.894 1010.875,682.567 983.375,694.964 C943.433,712.968 842.741,645.666 801.432,631.106 C744.184,610.931 681.174,616.728 615.878,633.346 Z">-->
    <!--                                    </path>-->
    <!--                                </svg>-->
    <!--                            </li>-->
    <!--                            <li class="animated-figure">-->
    <!--                                <img src="assets/image/about/about_5.png" alt="Process">-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-6 col-12 order-xl-1 compress-left-side has-animation active-animation">-->
    <!--                    <div class="process-box-layout1">-->
    <!--                        <ul class="content-holder">-->
    <!--                            <li>-->
    <!--                                <div-->
    <!--                                    class="translate-right-75 transition-150 opacity-animation transition-delay-100">-->
    <!--                                    <div class="d-flex align-items-sm-center fl_col">-->
    <!--                                        <div class="item-icon dodger-blue">-->
    <!--                                            <img src="assets/image/about/vision.png" alt="service-icon1"-->
    <!--                                                class="img-fluid w-50">-->
    <!--                                        </div>-->
    <!--                                        <div class="item-content">-->
    <!--                                            <h3 class="item-title">Vision</h3>-->
    <!--                                            <p>We envision a future where technology revolutionizes industries,-->
    <!--                                                enhances lives, and creates boundless opportunities for businesses-->
    <!--                                                to thrive.-->
    <!--                                            </p>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <svg x="0px" y="0px" width="312px" height="130px">-->
    <!--                                    <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1"-->
    <!--                                        stroke-dasharray="1300" stroke-dashoffset="0"-->
    <!--                                        d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338">-->
    <!--                                    </path>-->
    <!--                                    <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2"-->
    <!--                                        stroke-dasharray="6" stroke-dashoffset="1300"-->
    <!--                                        d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 ">-->
    <!--                                    </path>-->
    <!--                                </svg>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <div-->
    <!--                                    class="translate-left-75 transition-150 opacity-animation transition-delay-1000">-->
    <!--                                    <div class="d-flex align-items-sm-center flex-xl-row-reverse fl_col">-->
    <!--                                        <div class="item-icon sunset-orange">-->
    <!--                                            <img src="assets/image/about/mission.png" alt="service-icon1"-->
    <!--                                                class="img-fluid w-50">-->
    <!--                                        </div>-->
    <!--                                        <div class="item-content">-->
    <!--                                            <h3 class="item-title">Mission</h3>-->
    <!--                                            <p>Our mission is to help organizations succeed by delivering-->
    <!--                                                cutting-edge technology solutions that are dependable, extensible,-->
    <!--                                                and safe.</p>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <svg x="0px" y="0px" width="312px" height="130px">-->
    <!--                                    <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1"-->
    <!--                                        stroke-dasharray="1300" stroke-dashoffset="0"-->
    <!--                                        d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996">-->
    <!--                                    </path>-->
    <!--                                    <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2"-->
    <!--                                        stroke-dasharray="6" stroke-dashoffset="1300"-->
    <!--                                        d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996">-->
    <!--                                    </path>-->
    <!--                                </svg>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <div-->
    <!--                                    class="translate-right-75 transition-150 opacity-animation transition-delay-2000">-->
    <!--                                    <div class="d-flex align-items-sm-center fl_col">-->
    <!--                                        <div class="item-icon california">-->
    <!--                                            <img src="assets/image/about/goal.png" alt="service-icon1"-->
    <!--                                                class="img-fluid w-50">-->
    <!--                                        </div>-->
    <!--                                        <div class="item-content">-->
    <!--                                            <h3 class="item-title">Goal</h3>-->
    <!--                                            <p>We work tirelessly to discover new ways to serve our customers,-->
    <!--                                                identify emerging trends in the market, and create tailor-made-->
    <!--                                                solutions.-->
    <!--                                            </p>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!--</section>-->
    <!--===============about_6 section======================-->


    <!--about_7 section -->
    <!--<section class="w-100 float-left padding-top padding-bottom pad_bot tastimonials-con position-relative overflow "-->
    <!--    id="testimonials">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-6 col-md-6">-->
    <!--                <div class="tastimonials-left-con position-relative wow slideInLeft">-->
    <!--                    <figure class="mb-0">-->
    <!--                        <img src="assets/image/about/tastimonials-img.png" alt="tastimonials-img" class="img-fluid">-->
    <!--                    </figure>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 col-md-6">-->
    <!--                <div id="carouselExampleControls" class="carousel slide wow slideInRight" data-ride="carousel">-->
    <!--                    <div class="carousel-inner">-->
    <!--                        <div class="carousel-item active">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">Working with Krichhsoftwares was a-->
    <!--                                        game-changer for our business. Their tech solutions were impeccable,-->
    <!--                                        delivering the perfect blend of innovation, functionality, and seamless user-->
    <!--                                        experience.-->
    <!--                                    </p>-->
    <!--                                    <h4 class="d-block auther-name">Ashika</h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">I highly recommend Krichhsoftwares for their-->
    <!--                                        exceptional web development services. They transformed our outdated site-->
    <!--                                        into a modern, responsive platform, boosting our online presence and-->
    <!--                                        customer engagement.-->
    <!--                                    </p>-->
    <!--                                    <h4 class="d-block auther-name">Manisha</h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item ">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">The app developed by Krichhsoftwares exceeded-->
    <!--                                        our expectations. It's intuitive, user-friendly, and packed with features-->
    <!--                                        that streamline our operations and enhance the overall customer experience.-->
    <!--                                    </p>-->
    <!--                                    <h4 class="d-block auther-name">Hendry</h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item ">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">The UI/UX design services provided by Dynabird Info-->
    <!--                                        Solutions Private Limited were outstanding. They crafted a visually stunning-->
    <!--                                        interface with seamless navigation, resulting in improved user engagement-->
    <!--                                        and increased conversions.</p>-->
    <!--                                    <h4 class="d-block auther-name">Neha sharma-->
    <!--                                    </h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item ">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">We are extremely satisfied with Dynabird Info-->
    <!--                                        Solutions's expertise in database management. Their seamless integration of-->
    <!--                                        MySQL has enhanced our data processing capabilities, optimizing our business-->
    <!--                                        operations.</p>-->
    <!--                                    <h4 class="d-block auther-name">Rishi</h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="carousel-item ">-->
    <!--                            <div class="testimonials-content">-->

    <!--                                <h2>Enabling Digital Success-->
    <!--                                    <span>Stories</span>-->
    <!--                                </h2>-->
    <!--                                <div class="testimonials-inner-content">-->
    <!--                                    <p class="col-lg-11 pl-0">Choosing Krichhsoftwares for our e-commerce-->
    <!--                                        development was the best decision we made. They created a visually stunning,-->
    <!--                                        secure, and scalable platform that elevated our online sales and customer-->
    <!--                                        satisfaction.-->
    <!--                                    </p>-->
    <!--                                    <h4 class="d-block auther-name">kavya</h4>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"-->
    <!--                        data-slide="prev">-->
    <!--                        <span class="fas fa-arrow-left d-flex align-items-center justify-content-center"></span>-->
    <!--                        <span class="sr-only">Previous</span>-->
    <!--                    </a>-->
    <!--                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"-->
    <!--                        data-slide="next">-->
    <!--                        <span class="fas fa-arrow-right d-flex align-items-center justify-content-center"></span>-->
    <!--                        <span class="sr-only">Next</span>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- about_7 section -->
@endsection


   