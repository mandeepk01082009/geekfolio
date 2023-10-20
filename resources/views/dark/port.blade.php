
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
    <title>GoGoSprockets!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dark/assets/imgs/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('dark/assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('dark/assets/css/style.css') }}">


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
    <nav class="navbar navbar-expand-lg bord main-bg" style="background:#1d1d1d;">
        <div class="container">

            <a href="#">
                <label class="title" style="font-family: 'Racing Sans One';font-weight:bold; color:#DF0000; font-size: 25px; cursor: pointer;"
                    onclick="scroll_to_top()">GoGoSpr<i class="fa fa-cog fa-spin" style="color:white;"></i>ckets!</label>
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
                        <a class="nav-link" href="{{ route('contact') }}"><span class="rolling-text">Booking and
                                Contact</span></a>
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

        <header class="work-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-12">
                        <div class="caption">
                            <h6 class="sub-title">Our Works</h6>
                            <h1>Work Metro.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="portfolio section-padding pb-100">
            <div class="container-xxl">

                <div class="row">
                    <!-- filter links -->
                    <div class="filtering col-12 mb-80 text-center">
                        <div class="filter">
                            <span class="text">Filter By :</span>
                            <span data-filter='*' class='active' data-count="10">All</span>
                            <span data-filter='.light' data-count="03">Event Lightining</span>
                            <span data-filter='.wedd' data-count="03">Weddings</span>
                            <span data-filter='.prod' data-count="02">Production</span>
                            <span data-filter='.ent' data-count="02">Entertainment</span>
                        </div>
                    </div>
                </div>

                <div class="gallery metro text-center">

                    <div class="row">

                        <div class="col-lg-3 col-md-6 items light info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/light1.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items light info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/light2.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 items light info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/light3.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items prod info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/prod1.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 items prod info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/prod2.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 items ent info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/ent1.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items wedd info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/wedd2.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items ent info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/ent.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items wedd info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/wedd1.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items wedd info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="{{ asset('dark/assets/imgs/filter/wedd3.jpg') }}" alt="image">
                                    </div>
                                </a>
                                <div class="info">
                                    <h6><a href="project-details1.html">Character Design</a></h6>
                                    <span class="sub-title tag"><a href="project-details1.html">Design ART</a></span>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                </div>

            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->


    </main>


    <!-- ==================== Start Footer ==================== -->

    <footer class="pt-80 sub-bg">
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
                                <img src="assets/imgs/logo-light.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright d-flex">
                            <div class="ml-auto">
                                <p class="fz-13"> © 2023 GoGoSprockets, website by <span class="underline"><a
                                            href="https://grafxapps.com/"
                                            target="_blank">Graf x Apps LLC.</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->










    <!-- jQuery -->
    <script src="{{ asset('dark/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dark/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('dark/assets/js/plugins.js') }}"></script>

    <script src="{{ asset('dark/assets/js/ScrollTrigger.min.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('dark/assets/js/scripts.js') }}"></script>

</body>

</ A  R