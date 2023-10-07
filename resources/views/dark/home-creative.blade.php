@extends('dark.layout.app')

@section('styles')
@endsection

@section('content')
<main class="main-bg">

    <!-- ==================== Start Slider ==================== -->

    <header class="crev-slider position-re sub-bg">
        <div class="container-fluid rest ontop">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-end rest order2">
                    <div class="full-width">
                        <div class="gallery-text">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="text">
                                            <h6 class="sub-title mb-30">Digital Agency</h6>
                                            <h1>More Then Just a Design Agency</h1>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="text">
                                            <h6 class="sub-title mb-30">Digital Agency</h6>
                                            <h1>More Then Just a Design Agency</h1>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="text">
                                            <h6 class="sub-title mb-30">Digital Agency</h6>
                                            <h1>More Then Just a Design Agency</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="swiper-controls d-flex align-items-center">
                                <div class="swiper-pagination"></div>
                                <div class="arrows ml-auto">
                                    <div class="d-flex align-items-center">
                                        <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                                            <div><i class="fas fa-chevron-left"></i></div>
                                        </div>
                                        <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                                            <div><i class="fas fa-chevron-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 rest order1">
                    <div class="gallery-img">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bg-img" {{asset('dark/assets/imgs/header/slid1.jpg')}}"
                                        data-overlay-dark="3">
                                        <a href="page-about.html"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-img" {{asset('dark/assets/imgs/header/slid3.jpg')}}"
                                        data-overlay-dark="3">
                                        <a href="page-about.html"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-img" {{asset('dark/assets/imgs/header/slid5.jpg')}}"
                                        data-overlay-dark="3">
                                        <a href="page-about.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img opacity-1" data-background="{{asset('dark/assets/imgs/patterns/1.png')}}"></div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <!-- ==================== Start brands ==================== -->

    <div class="clients-carso2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true"
                        data-space="40">
                        <div id="content-carousel-container-unq-clients" class="swiper-container"
                            data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{asset('dark/assets/imgs/brands/01.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{asset('dark/assets/imgs/brands/02.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{asset('dark/assets/imgs/brands/03.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{asset('dark/assets/imgs/brands/04.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{asset('dark/assets/imgs/brands/05.png')}}" alt="">
                                            </a>
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

    <!-- ==================== End brands ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="serv-box section-padding pb-0">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Services</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">Our Services</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text wow fadeIn">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="serv-item lg-pad md-mb50 radius-5 wow fadeIn" data-wow-delay=".5s">
                        <div class="icon-img-50 mb-40">
                            <img src="assets/imgs/serv-icons/0.png" alt="">
                        </div>
                        <span class="mb-10 opacity-7">Product Design</span>
                        <h6 class="mb-15">Digital Product Design</h6>
                        <p class="fz-14">Creating a higher spacing and how people move through a unique.</p>
                        <div class="crv-more">
                            <a href="page-services.html" class="mt-30 ls1 fz-12 text-u">Read More<svg
                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item lg-pad md-mb50 radius-5 wow fadeIn" data-wow-delay=".8s">
                        <div class="icon-img-50 mb-40">
                            <img src="assets/imgs/serv-icons/1.png" alt="">
                        </div>
                        <span class="mb-10 opacity-7">Customs Services</span>
                        <h6 class="mb-15">Branding & Design</h6>
                        <p class="fz-14">Creating a higher spacing and how people move through a unique.</p>
                        <div class="crv-more">
                            <a href="page-services.html" class="mt-30 ls1 fz-12 text-u">Read More<svg
                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item lg-pad radius-5 wow fadeIn" data-wow-delay="1.2s">
                        <div class="icon-img-50 mb-40">
                            <img src="assets/imgs/serv-icons/2.png" alt="">
                        </div>
                        <span class="mb-10 opacity-7">Product Development</span>
                        <h6 class="mb-15">Web Development</h6>
                        <p class="fz-14">Creating a higher spacing and how people move through a unique.</p>
                        <div class="crv-more">
                            <a href="page-services.html" class="mt-30 ls1 fz-12 text-u">Read More<svg
                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start Portfolio ==================== -->

    <section class="work-carsouel section-padding">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">Our Portfolio</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Selected Projects.</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="full-width">
                            <div class="d-flex justify-content-end justify-end">
                                <div class="swiper-controls arrow-out d-flex">
                                    <div class="swiper-button-prev" tabindex="0" role="button"
                                        aria-label="Previous slide">
                                        <span class="left">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="swiper-button-next ml-50" tabindex="0" role="button"
                                        aria-label="Next slide">
                                        <span class="right">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid rest">
            <div class="row">
                <div class="col-12">
                    <div class="work-crus work-crus3 random out" data-carousel="swiper" data-items="3"
                        data-center="center" data-loop="true" data-space="120">
                        <div id="content-carousel-container-unq-w" class="swiper-container"
                            data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img">
                                            <img src="assets/imgs/portfolio/4/01.jpg" alt="">
                                            <div class="cont">
                                                <span class="mb-5">Branding</span>
                                                <h6 class="fz-18">Artboard Studio</h6>
                                            </div>
                                            <a href="project-details1.html" class="plink"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img">
                                            <img src="assets/imgs/portfolio/4/02.jpg" alt="">
                                            <div class="cont">
                                                <span class="mb-5">Branding</span>
                                                <h6 class="fz-18">Artboard Studio</h6>
                                            </div>
                                            <a href="project-details1.html" class="plink"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img">
                                            <img src="assets/imgs/portfolio/4/04.jpg" alt="">
                                            <div class="cont">
                                                <span class="mb-5">Branding</span>
                                                <h6 class="fz-18">Artboard Studio</h6>
                                            </div>
                                            <a href="project-details1.html" class="plink"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img">
                                            <img src="assets/imgs/portfolio/4/05.jpg" alt="">
                                            <div class="cont">
                                                <span class="mb-5">Branding</span>
                                                <h6 class="fz-18">Artboard Studio</h6>
                                            </div>
                                            <a href="project-details1.html" class="plink"></a>
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

    <!-- ==================== End Portfolio ==================== -->



    <!-- ==================== Start services tabs ==================== -->

    <section class="services-tab revers section-padding pt-0">
        <div class="container">
            <div class="row mb-80">
                <div class="col-lg-12">
                    <div class="full-width">
                        <div class="main-marq o-hidden pt-40 pb-40 bord-thin-top bord-thin-bottom">
                            <div class="slide-har st1">
                                <div class="box">
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                Design</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="tabs">
                <div class="col-lg-5 valign">
                    <div class="serv-tab-link tab-links full-width md-mb50">
                        <div class="sec-lg-head mb-80 wow fadeIn">
                            <h6 class="dot-titl-non mb-15">Services</h6>
                            <p>We help you to go online and increase your conversion rate Better design for
                                your
                                digital products. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <ul class="rest">
                                    <li class="item-link current mb-15 pb-15 bord-thin-bottom"
                                        data-tab="tabs-1"><span>01</span> UI/UX
                                        Design</li>
                                    <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-2">
                                        <span>02</span> Branding
                                    </li>
                                    <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-3">
                                        <span>03</span> Development
                                    </li>
                                    <li class="item-link" data-tab="tabs-4"><span>04</span> Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="serv-tab-cont">
                        <div class="tab-content current" id="tabs-1">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/imgs/sass-img/serv/4.jpg" alt="">
                                </div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40">
                                        <img src="assets/imgs/serv-icons/0.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are a creative studio specializing in design,
                                            development and strategy many different skills and disciplines
                                            in the
                                            production of all web.</p>
                                    </div>
                                    <a href="page-services.html" class="mt-30">
                                        <span class="mr-15">Read More</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                    <div class="bg-pattern bg-img"
                                        data-background="assets/imgs/patterns/abstact-BG.png"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-2">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/imgs/sass-img/serv/2.jpg" alt="">
                                </div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40">
                                        <img src="assets/imgs/serv-icons/1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are a creative studio specializing in design,
                                            development and strategy many different skills and disciplines
                                            in the
                                            production of all web.</p>
                                    </div>
                                    <a href="page-services.html" class="mt-30">
                                        <span class="mr-15">Read More</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-3">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/imgs/sass-img/serv/3.jpg" alt="">
                                </div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40">
                                        <img src="assets/imgs/serv-icons/2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are a creative studio specializing in design,
                                            development and strategy many different skills and disciplines
                                            in the
                                            production of all web.</p>
                                    </div>
                                    <a href="page-services.html" class="mt-30">
                                        <span class="mr-15">Read More</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-4">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/imgs/sass-img/serv/1.jpg" alt="">
                                </div>
                                <div class="cont sub-bg">
                                    <div class="icon-img-60 mb-40">
                                        <img src="assets/imgs/serv-icons/0.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are a creative studio specializing in design,
                                            development and strategy many different skills and disciplines
                                            in the
                                            production of all web.</p>
                                    </div>
                                    <a href="page-services.html" class="mt-30">
                                        <span class="mr-15">Read More</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End services tabs ==================== -->



    <!-- ==================== Start Testimonials ==================== -->

    <section class="testim-crv2 sub-bg position-re">
        <div class="container section-padding position-re">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="testim-swiper mt-80" data-carousel="swiper" data-items="1" data-loop="true"
                        data-space="30">
                        <div id="content-carousel-container-unq-testim" class="swiper-container"
                            data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="cont mb-30">
                                            <div class="rate-stars mb-20 fz-14">
                                                <span class="rate main-color">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="fw-400">I have been hiring people in this
                                                space for a number of years
                                                and I have never seen this level of
                                                professionalism. It really feels like you are
                                                working with a team that can get the job
                                                done.</h5>
                                        </div>
                                        <div class="line-icon mb-20 d-flex">
                                            <div class="ml-auto">
                                                <div class="img sub-bg">
                                                    <img src="assets/imgs/svg-assets/quote.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-60">
                                                    <img src="assets/imgs/testim/4.jpg" alt=""
                                                        class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6 class="fz-16">Leonard Heiser</h6>
                                                    <span class="opacity-7 sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-controls testim-controls arrow-out d-flex mt-50">
                        <div class="swiper-button-prev">
                            <span class="left">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="swiper-button-next ml-50">
                            <span class="right">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="half-img-left bg-img ontop md-hide" data-background="assets/imgs/testim/01.png">
            </div>
        </div>
        <div class="bg-pattern bg-repeat bg-img opacity-1" data-background="assets/imgs/patterns/dots.png">
        </div>
    </section>

    <!-- ==================== End Testimonials ==================== -->



    <!-- ==================== Start Numbers ==================== -->

    <section class="numbers crev-num section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item md-mb80">
                        <h2 class="fw-800 stroke">16</h2>
                        <h6>Years of Experience</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                    <div class="item md-mb80">
                        <h2 class="fw-800">4<span class="fz-80 fw-600">k</span></h2>
                        <h6>Projects Complated</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                    <div class="item sm-mb80">
                        <h2 class="fw-800 stroke">9<span class="fz-80 fw-600">k</span></h2>
                        <h6>Happy Customers</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="item ml-auto">
                        <h2 class="fw-800">12</h2>
                        <h6>Awards Winning</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Numbers ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="intro-corp section-padding pt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5 valign md-mb50">
                    <div class="imgs full-width mb-80">
                        <div class="img1 main-color wow fadeInUp">
                            <img src="assets/imgs/about/sq1.jpg" alt="">
                        </div>
                        <div class="img2 wow fadeInLeft">
                            <img src="assets/imgs/about/sq2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 valign">
                    <div class="cont full-width">
                        <div class="text">
                            <h2 class="d-slideup wow">
                                <span class="sideup-text">
                                    <span class="up-text">Watch the creative</span>
                                </span>
                                <span class="sideup-text">
                                    <span class="up-text">process behind our</span>
                                </span>
                                <span class="sideup-text">
                                    <span class="up-text">digital marketing.</span>
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
                                    <p class="fz-14">Taken possession of my entire soul, like these sweet
                                        mornings
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
                                    <p class="fz-14">Taken possession of my entire soul, like these sweet
                                        mornings
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
                                    <p class="fz-14">Taken possession of my entire soul, like these sweet
                                        mornings
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



    <!-- ==================== Start Call action ==================== -->

    <section class="call-action-center section-padding position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="sec-lg-head text-center">
                        <h2 class="d-slideup wow fz-70 fw-700">
                            <span class="sideup-text">
                                <span class="up-text">Have a project in mind?</span>
                            </span>
                            <span class="sideup-text">
                                <span class="up-text underline"><a href="page-contact.html"
                                        class="main-color">Let’s
                                        get to work.</a></span>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-repeat bg-img opacity-1" data-background="assets/imgs/patterns/dots.png"></div>
    </section>

    <!-- ==================== End Call action ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-list-half crev section-padding">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">Our Blog</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Latest News.</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="full-width d-flex justify-content-end justify-end">
                            <div class="vew-all">
                                <a href="blog-list.html">View All Our News
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn" data-wow-delay=".4s">
                <div class="col-lg-6">
                    <div class="item md-mb80">
                        <div class="row rest">
                            <div class="col-md-6">
                                <div class="img">
                                    <img src="assets/imgs/blog/h1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 valign">
                                <div class="cont">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                        2022</span>
                                    <h5>
                                        <a href="blog-details.html">Free advertising for your online
                                            business.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-half-img.html">Marketing</a>
                                        <a href="blog-half-img.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="row rest">
                            <div class="col-md-6">
                                <div class="img">
                                    <img src="assets/imgs/blog/h4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 valign">
                                <div class="cont">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                        2022</span>
                                    <h5>
                                        <a href="blog-details.html">Business meeting 2023 in San
                                            Francisco.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-half-img.html">Marketing</a>
                                        <a href="blog-half-img.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->


</main>

@endsection

@section('scripts')
@endsection