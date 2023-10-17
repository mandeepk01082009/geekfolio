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

    <div id="smooth-content">
