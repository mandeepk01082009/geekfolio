<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
    <meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Geekfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="dark/assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="dark/assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="dark/assets/css/style.css">


</head>

<body class="main-bg">



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
    
        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    
    <!-- ==================== End Loading ==================== -->
    
    
    <div class="cursor"></div>
    
    
    <!-- ==================== Start progress-scroll-button ==================== -->
    
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    
    <!-- ==================== End progress-scroll-button ==================== -->
    
    
    
    <div id="smooth-wrapper">
    
        <!-- ==================== Start Navbar ==================== -->
    
        <nav class="navbar navbar-expand-lg bord main-bg">
            <div class="container">
    
                <!-- Logo -->
                <a class="logo icon-img-100" href="#">
                    <img src="{{ asset('dark/assets/imgs/logo-light.png') }}" alt="logo">
                </a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </button>
    
                <!-- navbar links -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home-main') }}"><span class="rolling-text">Home</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}"><span class="rolling-text">ABOUT</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('portfolio') }}"><span class="rolling-text">Gallery</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}"><span class="rolling-text">Booking and Contact</span></a>
                                </li>
                            </ul>
                        </div>
    
                {{-- <div class="search-form">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Search">
                        <button><span class="pe-7s-search"></span></button>
                    </div>
                    <div class="search-icon">
                        <span class="pe-7s-search open-search"></span>
                        <span class="pe-7s-close close-search"></span>
                    </div>
                </div> --}}
            </div>
        </nav>
    
        <!-- ==================== End Navbar ==================== -->
    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h6 class="sub-title">Who We Are ?</h6>
                            <h1 class="fz-55">We're a Event planner.</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 offset-lg-4">
                        <div class="text mt-30">
                            <p>Our company offers a unique set of skills and a large inventory of equipment that can be tailored to fit the scope of any project or event.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-marq xlrg section-padding pb-0">
                <div class="slide-har st1">
                    <div class="box">
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start About ==================== -->

        <section class="pg-about section-padding sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bg-img radius-10 md-mb50" data-background="{{ asset('dark/assets/imgs/about/sq1.jpg') }}"></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="bg-img radius-10" data-background="{{ asset('dark/assets/imgs/about/sq2.jpg') }}"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sec-head mt-80">
                            <h6 class="sub-title">About the Comapany</h6>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="cont mt-80">
                            <h4>GoGoSprockets! is a full-service, in-house production company committed to making your special event as completely unique and memorable as possible. This challenge is met with our valuable years of experience, large inventory of equipment, our versatility and reliability, and most of all, our creative production staff! Some of our photos look familiar to you?? That's because... Yes! OUR pictures appear on others' websites. 'Cuz after you call them, who do you think they call to do the job! </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End About ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="serv-box section-padding">
            <div class="container">
                <div class="sec-lg-head mb-80">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="position-re">
                                <h6 class="dot-titl-non mb-10">Featured Services</h6>
                                <h2 class="fz-60 fw-700">Our Services</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="serv-item md-mb50 radius-10">
                            <div class="icon-img-60 mb-40">
                                <img src="{{ asset('dark/assets/imgs/serv-icons/0.png') }}" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">Brand Strategy & <br> Art Direction</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="serv-item md-mb50 radius-10">
                            <div class="icon-img-60 mb-40">
                                <img src="{{ asset('dark/assets/imgs/serv-icons/1.png') }}" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">UX/UI Design & <br> Website/App Design</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="serv-item radius-10">
                            
                            <div class="icon-img-60 mb-40">
                                <img src="{{ asset('dark/assets/imgs/serv-icons/2.png') }}" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">Typography & <br> Video Production</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start about ==================== -->

        <section class="intro-corp section-padding pt-0">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="imgs mb-80">
                            <div class="img1">
                                <img src="{{ asset('dark/assets/imgs/about/sq1.jpg') }}" alt="" class="radius-10">
                            </div>
                            <div class="img2">
                                <img src="{{ asset('dark/assets/imgs/about/sq2.jpg') }}" alt="" class="radius-10">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="cont">
                            <div class="text">
                                <h2 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Watch the creative</span>
                                    </span>
                                    <span class="sideup-text">
                                        <span class="up-text">process behind our</span>
                                    </span>
                                    <span class="sideup-text">
                                        <span class="up-text"><span>digital marketing</span>.</span>
                                    </span>
                                </h2>
                            </div>
                            <div class="accordion bord mt-40">

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".1s">
                                    <div class="title">
                                        <h6 class="fz-18">The Power of Influencer Marketing</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="title">
                                        <h6 class="fz-18">Unique and Influential Design</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                                <div class="item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="title">
                                        <h6 class="fz-18">We Build and Activate Brands</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">Taken possession of my entire soul, like these sweet mornings
                                            of spring which
                                            i enjoy with my whole.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->



        <!-- ==================== Start Testimonials ==================== -->

        <section class="testim-vrt sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign">
                        <div class="cont">
                            <div>
                                <h6 class="sub-title mb-15">Since From 2008</h6>
                                <h3>Keep pushing forward. We've got your back.</h3>
                                <div class="text mt-10 pb-30 bord-thin-bottom">
                                    <p>Things go wrong have questions. We’ve understand. So we have people</p>
                                </div>
                                <div class="stauts d-flex mt-20">
                                    <div class="item d-flex align-items-center mt-30">
                                        <h2 class="mr-20">12k</h2>
                                        <p class="fz-14">Happy Users <br> Around World</p>
                                    </div>
                                    <div class="item d-flex align-items-center ml-auto mt-30">
                                        <h2 class="mr-20">150k</h2>
                                        <p class="fz-14">Projects <br> Already Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div>
                            <div class="main-marqv">
                                <div class="slide-vertical st1">

                                    <div class="box">
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="{{ asset('dark/assets/imgs/testim/1.jpg') }}" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="{{ asset('dark/assets/imgs/testim/1.jpg') }}" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="{{ asset('dark/assets/imgs/testim/1.jpg') }}" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="{{ asset('dark/assets/imgs/testim/1.jpg') }}" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="assets/imgs/testim/1.jpg" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item radius-30 mt-30">
                                            <div class="cont mb-40">
                                                <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="fw-400">I have been hiring people in this
                                                    space for a number of years
                                                    and I have never seen this level of
                                                    professionalism. It really feels like you are
                                                    working with a team that can get the job
                                                    done.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img circle-80">
                                                        <img src="{{ asset('dark/assets/imgs/testim/1.jpg') }}" alt="" class="circle-img">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <div class="info">
                                                        <h6>Leonard Heiser</h6>
                                                        <span class="main-color sub-title">Ceo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Testimonials ==================== -->



        <!-- ==================== Start team ==================== -->

        <section class="team-crev section-padding pb-0 bord-thin-bottom">
            <div class="container-fluid rest">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-head-lg text-center text-u mb-80" id="sticky_item">
                            <h2>Team</h2>
                        </div>
                        <div class="swiper4" data-carousel="swiper" data-items="4" data-loop="true" data-space="60" data-center="true"
                            data-speed="1000">
                            <div id="content-carousel-container-unq-team" class="swiper-container"
                                data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('dark/assets/imgs/team/1.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="main-marq team-position">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-marq team-name">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('dark/assets/imgs/team/2.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="main-marq team-position">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-marq team-name">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('dark/assets/imgs/team/3.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="main-marq team-position">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-marq team-name">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('dark/assets/imgs/team/4.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="main-marq team-position">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-marq team-name">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('dark/assets/imgs/team/3.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="main-marq team-position">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>Co-Founder</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-marq team-name">
                                                    <div class="slide-har st1 non-strok">
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                            <div class="item">
                                                                <h4>adrian parody</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End team ==================== -->
        


        <!-- ==================== Start clients ==================== -->

        <div class="clients section-padding pb-100 position-re">
            <div class="container">
                <div class="row justify-content-center mb-80">
                    <div class="col-lg-6 text-center">
                        <div class="text">
                            <h3>We create <span>experiences</span> and turn ideas into reality.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row md-marg">
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/01.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/02.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".8s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/03.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/04.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".4s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/05.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".7s">
                                    <div class="img">
                                        <img src="{{ asset('dark/assets/imgs/brands/03.png') }}" alt="">
                                    </div>
                                    <a href="#0" class="link" data-splitting>www.GeekFolio.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End clients ==================== -->

    </main>

    <!-- ==================== Start call to action ==================== -->

    <section class="call-action-img">
        <div class="container">
            <div class="sec-bg-img bg-img parallaxie" data-background="{{ asset('dark/assets/imgs/background/2.jpg') }}"></div>
            <div class="sec-lg-head section-padding">
                <div class="row ontop">
                    <div class="col-11 d-flex align-items-center">
                        <div class="valign">
                            <h2 class="fz-50 d-rotate wow">
                                <span class="rotate-text">Have a project in mind?</span>
                                <span class="rotate-text">Let’s <span class="sub-font">get to work</span>.</span>
                            </h2>
                        </div>
                        <div class="ml-auto">
                            <a href="#0" class="butn-circle d-flex align-items-center text-center m-auto">
                                <div class="full-width">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                fill="currentColor"></path>
                                        </svg></span>
                                    <span class="full-width">Get In Touch</span>
                                </div>
                                <img src="{{ asset('dark/assets/imgs/svg-assets/circle-star.svg') }}" alt="" class="circle-star">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End call to action ==================== -->



    <!-- ==================== Start Footer ==================== -->

    <footer class="pt-80">
        <div class="container pb-80">
            <div class="row">
                <div class="col-lg-3">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Address</h6>
                        </div>
                        <div class="text">
                            <p>Germany — 785 15h Street, Office 478 Berlin, De 81566</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Say Hello</h6>
                        </div>
                        <div class="text">
                            <p class="mb-10">
                                <a href="#0">hello@design.com</a>
                            </p>
                            <h5>
                                <a href="#">+1 840 841 25 69</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 md-mb50">
                    <div class="tit mb-20">
                        <h6>Social</h6>
                    </div>
                    <ul class="rest social-text">
                        <li>
                            <a href="#0">Facebook</a>
                        </li>
                        <li>
                            <a href="#0">Twitter</a>
                        </li>
                        <li>
                            <a href="#0">LinkedIn</a>
                        </li>
                        <li>
                            <a href="#0">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="tit mb-20">
                        <h6>Newsletter</h6>
                    </div>
                    <div class="subscribe">
                        <form action="contact.php">
                            <div class="form-group rest">
                                <input type="email" placeholder="Type Your Email">
                                <button type="submit">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer pt-40 pb-40 bord-thin-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="#0">
                                <img src="{{ asset('dark/assets/imgs/logo-light.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright d-flex">
                            <div class="ml-auto">
                                <p class="fz-13">© 2023 Geekfolio is Proudly Powered by <span class="underline"><a
                                            href="https://themeforest.net/user/ui-themez"
                                            target="_blank">Ui-ThemeZ</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->










    <!-- jQuery -->
    <script src="dark/assets/js/jquery-3.6.0.min.js"></script>
    <script src="dark/assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="dark/assets/js/plugins.js"></script>

    <script src="dark/assets/js/ScrollTrigger.min.js"></script>

    <!-- custom scripts -->
    <script src="dark/assets/js/scripts.js"></script>

</body>

</html>