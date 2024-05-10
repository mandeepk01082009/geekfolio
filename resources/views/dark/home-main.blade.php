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
    <title>Gogosprockets!</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('dark/assets/css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('dark/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="home-main-crev main-bg">



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



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg bord main-bg" style="background:#1d1d1d;">
        <div class="container">

            <!-- Logo -->
            <a href="#">
                <label class="title font-weight-bold"
                    style="font-family: Arial, sans-serif; font-size: 30px; font-weight:bold; white-space: nowrap; cursor: pointer;"
                    onclick="scroll_to_top()"><strong>GoGoSpr<i class="fa fa-cog fa-spin"></i>ckets!</strong></label>
                <h3 class="subtitle"
                    style="font-size: 17px; font-weight: 400; margin-top: -5px; cursor: pointer;
                white-space: nowrap;"
                    onclick="scroll_to_top()">Entertainment Production Services</h3>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('port') }}"><span class="rolling-text">Gallery</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><span class="rolling-text">Contact</span></a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->


    <div id="smooth-content">

        <main class="main-bg">


            <!-- ==================== Start Slider ==================== -->

            <header class="slider showcase-full">
                <div class="swiper-container parallax-slider">
                    <div class="swiper-wrapper">
                        @foreach ($slider as $sliders)
                            <div class="swiper-slide">
                                <div class="bg-img valign" data-background="{{ asset('storage/' . $sliders->image) }}"
                                    data-overlay-dark="3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11 offset-lg-1">
                                                <div class="caption">
                                                    <h1>
                                                        <span data-swiper-parallax="-2000">{{ $sliders->title }}</span>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- slider setting -->
                    <div class="slider-contro">
                        <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                            <div>
                                <span>Next Slide</span>
                            </div>
                            <div><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                            <div><i class="fas fa-chevron-left"></i></div>
                            <div>
                                <span>Prev Slide</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination dots"></div>
                </div>
            </header>

            <!-- ==================== End Slider ==================== -->



            <!-- ==================== Start About ==================== -->

            <section class="pg-about section-padding sub-bg">
                <div class="container">
                    <div class="row">
                        @foreach ($about as $aboutus)
                            <div class="col-lg-4">
                                <div class="bg-img radius-10"
                                    data-background="{{ asset('storage/' . $aboutus->image) }}"></div>
                            </div>
                            <div class="col-lg-8">

                                <h2>{{ $aboutus->title }}</h2>
                                <h6>{{ $aboutus->description }} </h6>


                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- ==================== End About ==================== -->

            <!-- ==================== Start clients section ==================== -->

            <section id="clients" class="section-padding">
                <div class="container cover">
                    <div class="text-center">
                        <h2>Some of our Clients...</h2>
                        <div class="row no-margin">
                            @foreach ($clients as $client)
                                <div class="col-md-3 col-xs-6">
                                    <img class="logo" title="{{ $client->title }}"
                                        src="{{ asset('storage/' . $client->image) }}"
                                        style="width: 100%; max-width: 200px;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End clients section ==================== -->

            <!-- ==================== Start Portfolio ==================== -->

            <section class="portfolio section-padding">
                <div class="container">
                    <header class="section-header">
                        <h2 style="text-align: center;position: relative;">Gallery</h2>
                    </header>

                    <div class="row pt-100">

                        <div class="filtering col-12 mb-80 text-center">
                            <div class="filter">
                                <span class="text">Filter By :</span>
                                <span data-filter='*' class='active' data-count="10">All</span>
                                @foreach ($category as $item)
                                    @php
                                        $eventCount = $item->events()->count();
                                    @endphp
                                    <span data-filter=".{{ $item->name }}" data-count="{{ $eventCount }}">
                                        {{ $item->events()->first()?->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="gallery metro text-center">

                        <div class="row">
                            @foreach ($event as $events)
                                <div
                                    class="col-lg-3 col-md-6 items {{ $events->category->name ?? '-' }}  info-overlay {{ $events->height }} mb-30">
                                    <div class="item-img o-hidden">
                                        <a href="{{ asset('storage/' . $events->image) }}" class="imago wow"
                                            data-toggle="lightbox">
                                            <div class="inner wow">
                                                <img src="{{ asset('storage/' . $events->image) }}" width="100%"
                                                    alt="image">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <h6>{{ $events->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Portfolio ==================== -->



        </main>


        <!-- ==================== Start Footer ==================== -->
        <section class="portfolio section-padding pb-100">
            <footer class="sub-bg">
                <div class="footer-container">
                    <div class="container pb-80 pt-80 ontop">
                        <div class="call-box text-center mb-80">
                            <h2>
                                <a href="{{ route('contact') }}">Let's <span class="stroke"> Discuss</span></a>
                                <span class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="colum md-mb50">
                                    <div class="tit mb-20">
                                        <h6>Phone Number</h6>
                                    </div>
                                    <div class="text">

                                        <p><i class="fa fa-phone" aria-hidden="true"></i><span
                                                style="margin-left: 5px;">626-379-6943</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="colum md-mb50">
                                    <div class="tit mb-20">
                                        <h6>Say Hello</h6>
                                    </div>
                                    <div class="text">
                                        <p><small>GoGoSprockets! is a full-service, in-house production company
                                                committed to
                                                making
                                                your special event as completely unique and memorable as
                                                possible.</small>
                                        </p>
                                        <p class="mb-10">
                                            <a href="mailto:info@gogosprockets.com"><i class="fa fa-envelope"></i>
                                                info@gogosprockets.com</a>
                                        </p>

                                        {{-- <h5>
                                        <a href="#"><i class="fa fa-phone-square"></i>626-379-6943</a>
                                    </h5> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 md-mb50">
                                <div class="tit mb-20">
                                    <h6>Social</h6>
                                </div>
                                <ul class="rest social-text">
                                    <li>
                                        <a href="https://www.facebook.com/gogosprockets" target="_blank"><i
                                                class="fa fa-facebook-official" style="font-size: 20px;"
                                                aria-hidden="true"></i><span
                                                style="margin-left: 5px; font-size:18px;">FACEBOOK</span></a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="col-lg-3">
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
                        </div> --}}
                        </div>
                    </div>
                    <div class="sub-footer pt-40 pb-40 bord-thin-top ontop">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="assets/imgs/logo-light.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="copyright d-flex">
                                        <div class="ml-auto">
                                            <p class="fz-13"> © 2023 GoGoSprockets, website by <span
                                                    class="underline"><a href="https://grafxapps.com/"
                                                        target="_blank">Graf x Apps
                                                        LLC.</a></span></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>

    </div>

    <!-- ==================== End Footer ==================== -->

    <!-- jQuery -->
    <script src="{{ asset('dark/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dark/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('dark/assets/js/plugins.js') }}"></script>

    <script src="{{ asset('dark/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('dark/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('dark/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('dark/assets/js/smoother-script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <!-- custom scripts -->
    <script src="{{ asset('dark/assets/js/scripts.js')}}"></script>
</body>

</html>
