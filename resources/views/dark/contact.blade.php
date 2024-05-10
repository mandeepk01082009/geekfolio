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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

        <header class="page-header section-padding sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">Contact Us</h6>
                            <h1 class="fz-55">Let us make <br> your event brilliant!</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>We help our clients create events with the identity they want so people remember the
                                product, party or ceremony long after the lights go out.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                            <h2 class="fz-50">Get in <br> touch with us.</h2>
                            <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                                touch, we’d love to hear from you!</p>
                            <div class="phone fz-30 fw-600 mt-30 underline">
                                626-379-6943
                            </div>
                            <ul class="rest social-text d-flex mt-60">
                                <li class="mr-30">
                                    <a href="https://www.facebook.com/gogosprockets" target="_blank"><i
                                            class="fa fa-facebook-official" style="font-size: 20px;"
                                            aria-hidden="true"></i><span
                                            style="margin-left: 10px; font-size:18px;">FACEBOOK</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form method="POST" class="form_class" action="{{ route('contactus') }}"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="messages"></div> --}}
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message" rows="4"> </textarea>
                                        </div>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

    </main>

    <!-- ==================== Start Footer ==================== -->

    <footer class="sub-bg">
        <div class="sub-footer pt-40 pb-40 bord-thin-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="#0">
                                <h4>GoGoSprockets!</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright d-flex">
                            <div class="ml-auto">
                                <p class="fz-13"> © 2023 GoGoSprockets, website by <span class="underline"><a
                                            href="https://grafxapps.com/" target="_blank">Graf x Apps LLC.</a></span>
                                </p>
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

</html>
