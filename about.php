<?php


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> StemFern Limited</title>

    <!-- google fonts  -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="adminLogin.php">
                  STEMFern
              </a></h1>
                <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.php">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @@home__active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item @@services__active">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item @@contact__active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <!--/search-right-->
                        <div class="search-right">
                            <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">

                                    <form action="error.php" method="GET" class="search-box">
                                        <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fa fa-search"
                                          aria-hidden="true"></span></button>
                                    </form>

                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- banner bottom shape -->
    <div class="position-relative">
        <div class="shape overflow-hidden">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
        </div>
    </div>
    <!-- banner bottom shape -->

    <!-- about page about section -->
    <section class="w3l-index3" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4 align-self">
                        <h3 class="title-small"> About us</h3>
                        <h3 class="title-big mx-0">We are Built for Business! Explore Us Today </h3>
                        <p class="mt-md-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init dolor sit, amet elit.
                            Dolor ipsum non velit, culpa!</p>
                        <p class="mt-3">Pellen tesque libero ut justo, ultrices in ligula. Semper at. Lorem init ipsum dolor sit amet elit. Dolor ipsum non velit, culpa!</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="assets/images/about.jpg" alt="" class="radius-image-full img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about page about section -->


    <section class="w3l-content-4 py-5" id="why">
        <div class="content-4-main py-lg-5 py-md-4">
            <div class="container">
                <div class="content-info-in row">
                    <div class="content-left col-lg-6">
                        <h3 class="title-small"> Why choose us</h3>
                        <h3 class="title-big mx-0">Save Time & Effort with the Landing page website</h3>
                        <p class="mt-md-4 mt-3"> We focus on the needs of small to middle market businesses to improve and grow their return. lacinia id erat eu ullam corper. Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in culpa quis lacinia. Lorem ipsum dolor,
                            sit amet init elit. Eos, debitis. Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum non velit, culpa.</p>
                        <a href="#discover" class="btn btn-style btn-primary mt-md-5 mt-4">Discover More </a>
                    </div>
                    <div class="content-right col-lg-6 pl-lg-4 mt-lg-0 mt-5">
                        <div class="row content4-right-grids mb-lg-5 mb-4">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-cogs"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info">
                                <h6><a href="#url">First Working Process.</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                        <div class="row content4-right-grids mb-lg-5 mb-4">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info">
                                <h6><a href="#url"> Dedicated Team Member </a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                        <div class="row content4-right-grids">
                            <div class="col-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-support"></span>
                                </div>
                            </div>
                            <div class="col-10 content4-right-info">
                                <h6><a href="#url"> 24/7 Hours Support</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- middle -->
    <div class="middle py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="welcome-left text-center">
                <h5 class="title-small">Creativity goals</h5>
                <h3 class="title-big mb-4">See everything about your employee at one place. Let's get started!</h3>
                <p class="pr-lg-5">Start working with us that can provide everything you need to generate awareness, drive traffic, connect with us. You can test free trail today.</p>
                <div class="buttons mt-md-5 mt-4">
                    <a href="about.php" class="btn btn-style btn-primary mr-sm-2 mr-1">Get Started now</a>
                    <a href="contact.php" class="btn btn-style btn-outline-primary ml-sm-2">Free Trail</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <!-- testimonials -->
    <section class="w3l-clients-1" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="heading align-self text-center">
                    <h6 class="title-small">Testimonials</h6>
                    <h3 class="title-big mb-md-5 mb-4">What our Clients say</h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-row">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img">
                                        <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Dennis wilson</h3>
                                            <p class="indentity">Web Designer </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Tommy sakura</h3>
                                            <p class="indentity">Developer </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Roy Linderson</h3>
                                            <p class="indentity">Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img"><img src="assets/images/team4.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Mike Thyson</h3>
                                            <p class="indentity">Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->


    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2022 STEMFern. All rights reserved</p>

                <div class="col-lg-4 main-social-footer-29">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                </div>

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script>
    <!-- theme switch js (light and dark)-->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- owl carousel -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>